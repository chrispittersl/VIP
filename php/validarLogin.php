<?php
    include_once "../php/conexao.php";

    header('Content-Type: application/json');


    $user = $_POST['user'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM usuario WHERE usuario LIKE '$user' AND senha LIKE '$password'");

    $stmt->execute();
    $num_rows = $stmt->rowCount();

    if($num_rows > 0){
        echo json_encode("válido");
    }
    else{
        echo json_encode("inválido");
    }
?>
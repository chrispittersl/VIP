<?php
    include_once "../php/conexao.php";

    header('Content-Type: application/json');


    $user = $_POST['user'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM usuario WHERE usuario LIKE '$user' AND senha LIKE '$password'");

    $stmt->execute();
    $dados = $stmt->fetch(PDO::FETCH_ASSOC);
    $num_rows = $stmt->rowCount();

    if($dados['usuario']=='adm'){
        if(!isset($_SESSION)){
            session_start();
            $_SESSION['id']=$dados['cod_usuario'];
            $_SESSION['user']=$dados['usuario'];
            $_SESSION['password']=$dados['senha'];
            $_SESSION['logged']=TRUE;
            echo json_encode("administrador");
            exit;
        }
        
    }
    else if($num_rows > 0){
        if(!isset($_SESSION)){
            session_start();
            $_SESSION['id']=$dados['cod_usuario'];
            $_SESSION['user']=$dados['usuario'];
            $_SESSION['password']=$dados['senha'];
            $_SESSION['logged']=TRUE;
            echo json_encode("válido");
            exit;
        }
        
    }
    else{
        echo json_encode("inválido");
    }
?>
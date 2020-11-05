<?php
    header('Content-Type: application/json');
    
    include 'config.php';
    include 'mysqlexecuta.php';
    $con = conectar();
    mysql_select_db('vip');
    $Usuario = $_POST['user'];
    $Senha = $_POST['senha'];
    $sql="SELECT * FROM usuario where usuario like '$Usuario' && senha like '$Senha'";
    $res = mysqlexecuta($con, $sql);
    $quant = (mysql_num_rows($res));
    if($quant==0){
        echo json_encode("0");
    }
    else{
        echo json_encode("1");
    }
?>
<HTML>
<HEAD>
 <TITLE>Acesso</TITLE>
</HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<BODY>

<?php

    include 'config.php';
    include 'mysqlexecuta.php';
    $con = conectar ();
    mysql_select_db ('bd_acesso');
    $Login = $_POST['login'];
    $Senha = $_POST ['senha'];
    $sql="SELECT * FROM acesso where Login like '$Login' && Senha like '$Senha'";
    $res = mysqlexecuta($con, $sql);
    $quant = (mysql_num_rows($res));

    if($quant==0)
    {
    echo "<p align='center'><b><font color='#FA058C'>Login ou Senha Inválidos !!! </font></b></p>";
    }
    else
    {
        header("location:index.html");
    }

    ?>
</BODY>
</HTML>

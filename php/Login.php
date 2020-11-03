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
    mysql_select_db ('vip');
    $Usuario = $_POST['user'];
    $Senha = $_POST ['senha'];
    $sql="SELECT * FROM usuario where usuario like '$Usuario' && senha like '$Senha'";
    $res = mysqlexecuta($con, $sql);
    $quant = (mysql_num_rows($res));

    if($quant==0)
    {
    echo "<p align='center'><b><font color='#e5474b'>Login ou Senha Inválidos !!! </font></b></p>";
    }
    else
    {
        header("location:home.html");
    }

    ?>
</BODY>
</HTML>

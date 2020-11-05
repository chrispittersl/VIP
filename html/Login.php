<!DOCTYPE html>
<HTML>
    <HEAD>
        <TITLE>Login</TITLE>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </HEAD>

<BODY>

    <?php

        include '../php/config.php';
        include '../php/mysqlexecuta.php';
        $con = conectar ();
        mysql_select_db ('vip');
        $Usuario = $_POST['user'];
        $Senha = $_POST ['senha'];
        $sql="SELECT * FROM usuario where usuario like '$Usuario' && senha like '$Senha'";
        $res = mysqlexecuta($con, $sql);
        $quant = (mysql_num_rows($res));

        if($quant==0)
        {
            echo "<p align='center'><b><font color='red'>Login ou Senha Inválidos !!! </font></b></p>";
        }
        else if ($Usuario == "adm" && $Senha =="123")
        {
            header("location:homeadm.html");
        }
        else 
        {
            header("location:home.html");
        }

    ?>
</BODY>
</HTML>
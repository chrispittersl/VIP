<html>
<head>
<title>Exclusão de Tcc</title>
</head>
<body bgcolor=white>
<center> <img src="logotipo-cps.png"> </center>
<?php
	include 'config.php';
	include 'mysqlexecuta.php';
	$con = conectar();
	mysql_select_db('vip');
	$cod_usuario = $_POST["codusuario"];
	$sql =  "SELECT * FROM tcc where cod_tcc = $cod_usuario";
	$res = mysqlexecuta($con,$sql);
	$quant = (mysql_num_rows($res)); 
	if ($quant==0){
		echo "<p align='center'<b><font color=#A22529>Tcc não Cadastrado(a)</font></b></p>";
	}
	else{
		$sql = "delete from tcc where cod_tcc = $cod_usuario";
		$res = mysqlexecuta($con,$sql);
		echo "<p><b> Excluido com Sucesso</b></p>";
	}
?>
<br><br><br>
<a href = 'pesqTcc_geral.php'><p align = "center">Listagem Tcc</p></a>
</body>
</html>
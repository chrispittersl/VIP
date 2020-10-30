<html lang="pt-br">
<head>
<title>Exclusão de TCC</title>
</head>
<body >
 <img src="logotipo-cps.png"> 
<?php
	include 'config.php';
	include 'mysqlexecuta.php';
	$con = conectar();
	mysql_select_db('vip');
	$cod_usuario = $_POST["codusuario"];
	$sql =  "SELECT * FROM TCC where cod_TCC = $cod_usuario";
	$res = mysqlexecuta($con,$sql);
	$quant = (mysql_num_rows($res)); 
	if ($quant==0){echo "<p align='center'TCC não Cadastrado(a)";
	}
	else{$sql = "delete from TCC where cod_TCC = $cod_usuario";$res = mysqlexecuta($con,$sql);echo " Excluido com Sucesso";
	}
?>

<a href = 'pesqTCC_geral.php'>Listagem TCC</a>
</body>
</html>
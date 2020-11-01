<html lang="pt-br">
<head>
<title>Exclusão de TCC</title>
</head>
<body>
<?php
	include 'config.php';
	include 'mysqlexecuta.php';
	$con = conectar();
	mysql_select_db('vip');
	$cod_TCC = $_POST["cod_TCC"];
	$sql = "SELECT * FROM TCC where cod_tcc = $cod_TCC";
	$res = mysqlexecuta($con,$sql);
	$quant = (mysql_num_rows($res)); 
	if ($quant==0){echo "TCC requerido está sem cadastro(a)";
	}
	else{$sql = "delete from TCC where cod_TCC = $cod_TCC";
	$res = mysqlexecuta($con,$sql);echo "Excluido com Sucesso";
	}
?>
</body>
</html>
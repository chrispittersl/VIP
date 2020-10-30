<hmtl>
	<head><title>	Inclusão de registros na tabela TCC</title>
	</head>
	<body >	<img src="logotipo-cps.png"><?php	$horario_TCC =$_POST["horario_TCC"];	$data_TCC =$_POST["data_TCC"];	$descricao =$_POST["descricao"];	$nome =$_POST["nome"];	$data_agendamento =$_POST["data_agendamento"];	$num_sala =$_POST["num_sala"];	$cod_usuario =$_POST["cod_usuario"];		include 'config.php';	include 'mysqlexecuta.php';		$con = conectar();		mysql_select_db('vip');		$sql = "insert into TCC(horario_TCC,data_TCC,descricao,nome,data_agendamento,num_sala,cod_usuario )Values('$cod_TCC','$horario_TCC','$data_TCC','$descricao','$nome','$data_agendamento','$num_sala', '$cod_usuario')";		$res = mysqlexecuta($con,$sql);		echo "" . "." . ">" . "inclusão efetuada com sucesso !!" . "" . "." . "" . "";	echo "<a href = 'pesqTCC_geral.php'>Listar TCC</a>"?>
	</body>
</html>
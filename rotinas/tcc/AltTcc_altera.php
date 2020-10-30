<html lang="pt-br">
<head>
<title> Alteração de TCC</title>
</head>
<body >
<?php
	include 'config.php';
	include 'mysqlexecuta.php';
	$con = conectar();
	mysql_select_db('vip');
	$cod_TCC= $_POST["cod_TCC"];
	$horario_TCC= $_POST["horario_TCC"];
	$data_TCC= $_POST["data_TCC"];
	$descricao= $_POST["descricao"];
	$nome= $_POST["nome"];
	$data_agendamento= $_POST["data_agendamento"];
	$num_sala= $_POST["num_sala"];
	$cod_usuario= $_POST["cod_usuario"];
	$sql = "UPDATE TCC set horario_TCC = '$horario_TCC', data_TCC = '$data_TCC', descricao = '$descricao', nome = $nome, data_agendamento = '$data_agendamento', num_sala = '$num_sala', cod_usuario = cod_usuario where matricula = $cod_TCC";
	$res = mysqlexecuta($con,$sql);
?>
TCC alterado com sucesso !!!
</body></html>
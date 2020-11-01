<html lang="pt-br">
<head>
<title> Alteração de tcc</title>
</head>
<body>
<?php
	include 'config.php';
	include 'mysqlexecuta.php';
	$con = conectar();
	mysql_select_db('vip');
	$cod_tcc= $_POST["cod_tcc"];
	$horario_tcc= $_POST["horario_tcc"];
	$data_tcc= $_POST["data_tcc"];
	$descricao= $_POST["descricao"];
	$nome= $_POST["nome"];
	$data_agendamento= $_POST["data_agendamento"];
	$num_sala= $_POST["num_sala"];
	$cod_usuario= $_POST["cod_usuario"];
	$sql = "UPDATE tcc set cod_tcc = $cod_tcc, horario_tcc = '$horario_tcc', data_tcc = '$data_tcc', descricao = '$descricao', nome = '$nome', data_agendamento = '$data_agendamento', 
	num_sala = $num_sala, cod_usuario = $cod_usuario where cod_tcc = $cod_tcc";
	$res = mysqlexecuta($con,$sql);
?>
Alterado com sucesso !
</body></html>
<html lang="pt-br">
<head>
<title>Alteração de Reuniões</title>
</head>
<body>
<?php
	include 'config.php';
	include 'mysqlexecuta.php';
	$con = conectar();
	mysql_select_db('vip');
	$cod_tcc= $_POST["cod_tcc"];
	$cod_reuniao= $_POST["cod_reuniao"];
	$horario_reuniao= $_POST["horario_reuniao"];
	$data_reuniao= $_POST["data_reuniao"];
	$descricao= $_POST["descricao"];
	$nome= $_POST["nome"];
	$data_agendamento= $_POST["data_agendamento"];
	$num_sala= $_POST["num_sala"];
	$cod_usuario= $_POST["cod_usuario"];
	$sql = "UPDATE reunioes set cod_reuniao = $cod_reuniao, horario_reuniao = '$horario_reuniao', data_reuniao = '$data_reuniao', descricao = '$descricao',
	nome = '$nome', data_agendamento = '$data_agendamento', num_sala = $num_sala, cod_usuario = $cod_usuario where cod_reuniao = '$cod_reuniao'";
	$res = mysqlexecuta($con,$sql);
?>
Reunião alterada com sucesso!
</body></html>
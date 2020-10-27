<html>
<head>
<title> Alteração de Tcc</title>
</head>
<body bgcolor=white>
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
	$sql = "UPDATE tcc set horario_tcc = '$horario_tcc', data_tcc = '$data_tcc', descricao = '$descricao', nome = $nome, data_agendamento = '$data_agendamento', num_sala = '$num_sala', cod_usuario = cod_usuario where matricula = $cod_tcc";
	$res = mysqlexecuta($con,$sql);
?>
<p align="center"><b><font color="#A22529">Tcc alterado com sucesso !!!</font></b></p>
<br><br><br><
<a href='pesq_geral.php'><p align="center"> Listar Tcc</p></a>
<p> <a href='index.html'><p align="center">Voltar para Menu Principal</p></a>
</body></html>
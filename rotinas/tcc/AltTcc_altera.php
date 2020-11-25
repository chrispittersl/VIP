<?php
	include_once "../../php/conexao.php";
	header('Content-Type: application/json');
	$cod_tcc= $_POST["cod_tcc"];
	$horario_tcc= $_POST["horario_tcc"];
	$data_tcc= $_POST["data_tcc"];
	$descricao= $_POST["descricao"];
	$nome= $_POST["nome"];
	$data_agendamento= $_POST["data_agendamento"];
	$num_sala= $_POST["num_sala"];
	$cod_usuario= $_POST["cod_usuario"];
	$erro = 0;
	try{
		$stmt = $pdo->prepare("UPDATE tcc set cod_tcc = $cod_tcc, horario_tcc = '$horario_tcc', data_tcc = '$data_tcc', descricao = '$descricao',
		nome = '$nome', data_agendamento = '$data_agendamento', num_sala = $num_sala, cod_usuario = $cod_usuario where cod_tcc = $cod_tcc");
		$stmt->execute();
	}
	catch(Exception $e){
		$erro = 1;
	}
	echo json_encode("$erro");
?>
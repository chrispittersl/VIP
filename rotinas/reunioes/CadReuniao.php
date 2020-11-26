<?php
	header('Content-Type: application/json');
	$horario_reuniao=$_POST["horario_reuniao"];
	$data_reuniao=$_POST["data_reuniao"];
	$descricao=$_POST["descricao"];
	$nome=$_POST["nome"];
	$data_agendamento=$_POST["data_agendamento"];
	$num_sala=$_POST["num_sala"];
	$cod_usuario=$_POST["cod_usuario"];
	
	include_once "../../php/conexao.php";
	$error = 0;
	try{
		$stmt = $pdo->prepare("INSERT INTO reunioes(horario_reuniao,data_reuniao,descricao,nome,data_agendamento,num_sala,cod_usuario)
		Values('$horario_reuniao','$data_reuniao','$descricao','$nome','$data_agendamento',$num_sala,$cod_usuario)");
		$stmt->execute();
	}
	catch(Exception $e){
		$error = 1;
	}
	echo json_encode("$error");
?>

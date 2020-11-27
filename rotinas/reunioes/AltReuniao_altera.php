<?php
	include_once "../../php/conexao.php";
	header('Content-Type: application/json');
	$cod_reuniao= $_POST["cod_reuniao"];
	$horario_reuniao= $_POST["horario_reuniao"];
	$data_reuniao= $_POST["data_reuniao"];
	$descricao= $_POST["descricao"];
	$nome= $_POST["nome"];
	$data_agendamento= $_POST["data_agendamento"];
	$num_sala= $_POST["num_sala"];
	$cod_usuario= $_POST["cod_usuario"];
	$erro = 0;
	
    try{
        $stmt = $pdo->prepare("UPDATE reunioes set cod_reuniao = $cod_reuniao, horario_reuniao = '$horario_reuniao', data_reuniao = '$data_reuniao', descricao = '$descricao',
		nome = '$nome', data_agendamento = '$data_agendamento', num_sala = $num_sala, cod_usuario = $cod_usuario where cod_reuniao = '$cod_reuniao'");
        $stmt->execute();
    }
    catch(Exception $e){
        $erro = 1;
    }
	echo json_encode("$erro");
?>
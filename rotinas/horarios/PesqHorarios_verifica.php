<?php
	header('Content-Type: application/json');
	include_once "../../php/conexao.php";
	$cod_horario=$_POST["cod_horario"];
	
	$stmt = $pdo->prepare("SELECT * FROM horario_aula where cod_horario = $cod_horario");
	$stmt->execute();
	$num_rows = $stmt->rowCount();
	try{
		if ($num_rows==0){
			echo json_encode("1");
		}
		else{
			echo json_encode("0");
		}
	}
	catch(Exception $e){
		echo json_encode("Ocorreu um problema no banco de dados, favor contactar o administrador");
	}
	?>
<?php
	include_once "../../php/conexao.php";
	header('Content-Type: application/json');
	$cod_usuario= $_POST["cod_usuario"];
	$cod_turma= $_POST["cod_turma"];
	$horainicio= $_POST["horainicio"];
	$horafim= $_POST["horafim"];
	$dia_da_semana= $_POST["dia_da_semana"];
	$materia= $_POST["materia"];
	$professor= $_POST["professor"];
	$error = 0;

	try{
		$stmt = $pdo->prepare("INSERT INTO horario_aula(cod_usuario,cod_turma,horainicio,horafim,dia_da_semana,materia,professor) 
		Values($cod_usuario,$cod_turma,'$horainicio','$horafim','$dia_da_semana','$materia','$professor')");
		$stmt->execute();
	}
	catch(Exception $e){
		$error = 1;
	}
	echo json_encode("$error");
?>
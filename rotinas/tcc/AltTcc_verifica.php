<?php
	header('Content-Type: application/json');
	include_once "../../php/conexao.php";
	$cod_tcc=$_POST["cod_tcc"];
	
	$stmt = $pdo->prepare("SELECT * FROM tcc where cod_tcc = $cod_tcc");
	$stmt->execute();
	$num_rows = $stmt->rowCount();
	try{
		if ($num_rows==0){
			echo json_encode("TCC não cadastrado!");
		}
		else if($num_rows>0){
			echo json_encode("TCC encontrado!");
		}
	}
	catch(Exception $e){
		echo json_encode("Ocorreu um problema no banco de dados, favor contactar o administrador");
	}
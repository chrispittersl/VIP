<?php
	header('Content-Type: application/json');
	include_once "../../php/conexao.php";
	$cod_tcc = $_POST["cod_tcc"];
	
	$stmt = $pdo->prepare("SELECT * FROM tcc where cod_tcc = $cod_tcc");
	$stmt->execute();
	$num_rows = $stmt->rowCount();
	try{
		if ($num_rows==0){
			echo json_encode("TCC não cadastrada!");
		}
		else if($num_rows > 0){
			$stmt = $pdo->prepare("DELETE FROM tcc where cod_tcc = $cod_tcc");
			$stmt->execute();
			echo json_encode("Excluído com sucesso");
		}
	}
	catch(Exception $e){
		echo json_encode("Ocorreu um problema no banco de dados, favor contactar o adm");
	}
?>
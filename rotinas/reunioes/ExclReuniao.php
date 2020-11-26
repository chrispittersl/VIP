<?php
	header('Content-Type: application/json');
	include_once "../../php/conexao.php";
	$cod_reuniao=$_POST["cod_reuniao"];
	
	$stmt = $pdo->prepare("SELECT * FROM reunioes where cod_reuniao = $cod_reuniao");
	$stmt->execute();
	$num_rows = $stmt->rowCount();
	try{
		if ($num_rows==0){
			echo json_encode("Reunião não cadastrada!");
		}
		else if($num_rows > 0){
			$stmt = $pdo->prepare("DELETE FROM reunioes WHERE cod_reuniao = $cod_reuniao");
			$stmt->execute();
			echo json_encode("Excluído com sucesso");
		}
	}
	catch(Exception $e){
		echo json_encode("Ocorreu um problema no banco de dados, favor contactar o adm");
	}
?>

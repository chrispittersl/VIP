<?php
		include_once "../../php/conexao.php";
		header('Content-Type: application/json');
		$horario_tcc =$_POST["horario_tcc"];	
		$data_tcc =$_POST["data_tcc"];	
		$descricao =$_POST["descricao"];	
		$nome =$_POST["nome"];	
		$data_agendamento =$_POST["data_agendamento"];	
		$num_sala =$_POST["num_sala"];	
		$cod_usuario =$_POST["cod_usuario"];
		$erro = 0;
		try{
			$stmt = $pdo->prepare("insert into tcc(horario_tcc,data_tcc,descricao,nome,data_agendamento,num_sala,cod_usuario)
			Values('$horario_tcc','$data_tcc','$descricao','$nome','$data_agendamento','$num_sala', '$cod_usuario')");
			$stmt->execute();
		}
		catch(Exception $e){
			$erro = 1;
		}
		echo json_encode("$erro");
?>
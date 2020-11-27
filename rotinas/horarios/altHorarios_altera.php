<?php
	include_once "../../php/conexao.php";
	header('Content-Type: application/json');
    $cod_horario= $_POST["cod_horario"];
    $cod_usuario= $_POST["cod_usuario"];
    $cod_turma= $_POST["cod_turma"];
    $horainicio= $_POST["horainicio"];
    $horafim= $_POST["horafim"];
    $dia_da_semana= $_POST["dia_da_semana"];
    $materia= $_POST["materia"];
    $professor= $_POST["professor"];
    $erro = 0;

    try{
        $stmt = $pdo->prepare("UPDATE horario_aula set cod_horario = $cod_horario ,cod_usuario = $cod_usuario ,cod_turma = $cod_turma ,horainicio = '$horainicio',horafim = '$horafim',
        dia_da_semana = '$dia_da_semana',materia = '$materia',professor = '$professor' where cod_horario = '$cod_horario'");
        $stmt->execute();
    }
    catch(Exception $e){
        $erro = 1;
    }
	echo json_encode("$erro");
?>
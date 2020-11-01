<html lang="pt-br">
<head>
<title> Alteração de dados: Horários</title>
</head>
<body >
<?php
	include 'config.php';
	include 'mysqlexecuta.php';
	$con = conectar();
    mysql_select_db('vip');
    $cod_usuario= $_POST["cod_usuario"];
    $cod_turma= $_POST["cod_turma"];
	$horainicio= $_POST["horainicio"];
    $horafim= $_POST["horafim"];
    $diaSemana= $_POST["diaSemana"];
    $materia= $_POST["materia"];
    $professor= $_POST["professor"];
	$sql = "UPDATE horario_aula set cod_usuario = $cod_usuario ,cod_turma = $cod_turma ,horainicio = '$horainicio',horafim = '$horafim',dia_da_semana = '$diaSemana',materia = '$materia',professor = '$professor' where cod_turma = $cod_turma";
	$res = mysqlexecuta($con,$sql);
?>
Horário alterado com sucesso !!!
</body></html>

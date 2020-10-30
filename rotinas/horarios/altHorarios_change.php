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
    $cod_horario= $_POST["cod_horario"];
	$horainicio= $_POST["horainicio"];
    $horafim= $_POST["horafim"];
    $diaSemana= $_POST["diaSemana"];
    $materia= $_POST["materia"];
    $professor= $_POST["professor"];
	$sql = "UPDATE horario_aula set horainicio = '$horainicio',horafim = '$horafim',diaDaSemana = '$diaSemana',materia = '$materia',professor = '$professor' where cod_horario = $cod_horario";
	$res = mysqlexecuta($con,$sql);
?>
Horário alterado com sucesso !!!
</body></html>

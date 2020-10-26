<html>
<head>
<title> Alteração de dados: Horários</title>
</head>
<body bgcolor=white>
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
<p align="center"><b><font color="#A22529">Horário alterado com sucesso !!!</font></b></p>
<br><br><br><
<a href='pesqdisc_geral.php'><p align="center"> Listar Horários </p></a>
<p> <a href='index.html'><p align="center">Voltar para Menu Principal</p></a>
</body></html>

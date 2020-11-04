<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Alteração de reunião</title>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--CSS-->
		<link rel="stylesheet" href="../../css/rotinas.css">
        <!--ICONES BOOTSTRAP-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity = "sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin = "anonymous">
        <!--ICON PAGINA-->
        <link rel = "shortcut icon" type = "imagem/x-icon" href = "../../img/logo.ico"/>
        <!--FONTE GOOGLE USADA-->
        <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
	</head>
<body>
<?php
	include 'config.php';
	include 'mysqlexecuta.php';
	$con = conectar();
	mysql_select_db('vip');
	$cod_tcc= $_POST["cod_tcc"];
	$cod_reuniao= $_POST["cod_reuniao"];
	$horario_reuniao= $_POST["horario_reuniao"];
	$data_reuniao= $_POST["data_reuniao"];
	$descricao= $_POST["descricao"];
	$nome= $_POST["nome"];
	$data_agendamento= $_POST["data_agendamento"];
	$num_sala= $_POST["num_sala"];
	$cod_usuario= $_POST["cod_usuario"];
	$sql = "UPDATE reunioes set cod_reuniao = $cod_reuniao, horario_reuniao = '$horario_reuniao', data_reuniao = '$data_reuniao', descricao = '$descricao',
	nome = '$nome', data_agendamento = '$data_agendamento', num_sala = $num_sala, cod_usuario = $cod_usuario where cod_reuniao = '$cod_reuniao'";
	$res = mysqlexecuta($con,$sql);
?>
Reunião alterada com sucesso!
</body></html>
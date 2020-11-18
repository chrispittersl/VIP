<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Cadastro de Horários</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--CSS-->
		<link rel="stylesheet" href="../../css/rotinas2.css">
		<!--ICONES BOOTSTRAP-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity = "sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin = "anonymous">
		<!--ICON PAGINA-->
		<link rel = "shortcut icon" type = "imagem/x-icon" href = "../../img/logo.ico"/>
		<!--FONTE GOOGLE USADA-->
		<link href="https://fonts.googleapis.com/css2?family=Anton&family=Archivo&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
	</head>
	<body >
		
		<?php
			$cod_usuario= $_POST["cod_usuario"];
			$cod_turma= $_POST["cod_turma"];
			$horainicio= $_POST["horainicio"];
			$horafim= $_POST["horafim"];
			$diadasemana= $_POST["diadasemana"];
			$materia= $_POST["materia"];
			$professor= $_POST["professor"];
			
			include 'config.php';
			include 'mysqlexecuta.php';
			
			$con = conectar();
			
			mysql_select_db('vip');
			
			
			$sql = "insert into horario_aula(cod_usuario,cod_turma,horainicio,horafim,dia_da_semana,materia,professor) 
			Values ($cod_usuario,$cod_turma,'$horainicio','$horafim','$diadasemana','$materia','$professor')";
			
			$res = mysqlexecuta($con,$sql);
			
			echo  "inclusão efetuada com sucesso !!";
		?>
	</body>
</hmtl>
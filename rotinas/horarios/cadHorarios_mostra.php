<?php
	include_once "../../php/session_adm.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Cadastro de Horários</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--CSS-->
		<link rel="stylesheet" href="../css/rotinas-tudo.css">
		<!--ICONES BOOTSTRAP-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity = "sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin = "anonymous">
		<!--ICON PAGINA-->
		<link rel = "shortcut icon" type = "imagem/x-icon" href = "../../img/logo.ico"/>
		<!--FONTE GOOGLE USADA-->
		<link href="https://fonts.googleapis.com/css2?family=Anton&family=Archivo&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
	</head>
	<body>
		<div class="cont-rotinas-gd">
			<h1>Cadastrar</h1>
			<form name="f1">

				<label for="cod_usuario">Código de usuário</label>
				<input type="text" id="cod_usuario" name="cod_usuario" autocomplete="off" required onkeypress= "return blockletras(event)">

				<label for="cod_turma">Código de turma</label>
				<input type="text" id="cod_turma" name="cod_turma" autocomplete="off"  required onkeypress= "return blockletras(event)">

				<label for="horainicio">Horário de início</label>
				<input type="text" id="horainicio" name="horainicio" required autocomplete="off" placeholder="Ex: 08:00:00">

				<label for="horafim">Horário de fim</label>
				<input type="text" id="horafim" name="horafim" required autocomplete="off" placeholder="Ex: 16:20:00">

				<label for="diadasemana">Dia da Semana</label>
				<input type="text" id="diadasemana" name="diadasemana" required autocomplete="off" placeholder="Ex: Segunda-Feira">

				<label for="materia">Matéria</label>
				<input type="text" id="materia" name="materia" required autocomplete="off" placeholder="Ex: Filosofia">

				<label for="professor">Professor</label>
				<input type="text" id="professor" name="professor" required autocomplete="off" placeholder="Ex: Marlon">
				
				<button id="btn-cad-h"><i class="fa fa-plus fa-lg" aria-hidden="true"></i></button>
				<a href="#">Voltar para a <span>home</span></a>
			</form>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="../../js/rotinas.js"></script>
		<script src="../../js/script.js"></script>	
		<script src="../../js/blockletras.js"></script>
		</body>
</html>
<?php
	include_once "../../php/session_adm.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title> Alteração de dados: Horários</title>
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
		<?php
			include_once "../../php/conexao.php";
			$cod_horario=$_POST["cod_horario"];
			
			$stmt = $pdo->prepare("SELECT dia_da_semana,horainicio,horafim,materia,professor,cod_usuario,cod_turma FROM horario_aula where cod_horario = $cod_horario");
			$stmt->execute();
			$num_rows = $stmt->rowCount();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$horainicio = $row['horainicio'];
			$horafim = $row['horafim'];
			$materia = $row['materia'];
			$professor = $row['professor'];
			$dia_da_semana = $row['dia_da_semana'];
			$cod_turma = $row['cod_turma'];
			$cod_usuario = $row['cod_usuario'];
		?>
		<div class="cont-rotinas-gd">
			<h1>Alteração</h1>
			<form id="form-altera-horarios" name = "f1">
				<label>Código de horário</label>

				<label id="cod"><?php echo $cod_horario ?></label>
				<input type="hidden" id="cod_horario" name="cod_horario" value="<?php echo $cod_horario;?>">

				<label for="cod_usuario">Código de usuário</label>
				<!-- <input type='text' id="cod_usuario" name='cod_usuario' value='' required> -->
				<select id="cod_usuario" name="cod_usuario">
					<?php
						$stmt = $pdo->prepare("SELECT * FROM usuario");
						$stmt->execute();
						while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
							if($cod_usuario == $dados['cod_usuario']){
								?><option value="<?php echo $dados['cod_usuario'];?>" selected><?php echo $dados['cod_usuario'];?> - <?php echo $dados['usuario'];?></option><?php
							}
							else{
								?><option value="<?php echo $dados['cod_usuario'];?>"><?php echo $dados['cod_usuario'];?> - <?php echo $dados['usuario'];?></option><?php
							}
						}
					?>
				</select>
					
				<label for="cod_turma">Código de turma</label>
				<!-- <input type='text' id="cod_turma" name='cod_turma' value='' required> -->
				<select id="cod_turma" name="cod_turma">
					<?php

						$stmt = $pdo->prepare("SELECT cod_turma,serie,nome_curso FROM turma AS T INNER JOIN curso AS C ON T.cod_curso = C.cod_curso");
						$stmt->execute();
						while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
							if($cod_turma == $dados['cod_turma']){
								?><option value="<?php echo $dados['cod_turma'];?>" selected><?php echo $dados['cod_turma'];?> - <?php echo $dados['serie']." ".$dados['nome_curso'];?> </option><?php
							}
							else{
								?><option value="<?php echo $dados['cod_turma'];?>"><?php echo $dados['cod_turma'];?> - <?php echo $dados['serie']." ".$dados['nome_curso'];?> </option><?php
							}
						}
					?>
				</select>

				<label for="horainicio">Horário de Início</label>
				<input type='time' id="horainicio" name='horainicio' value='<?php echo $horainicio;?>' required>
					
				<label for="horafim">Horário de fim</label>
				<input type='time' id="horafim" name='horafim' value='<?php echo $horafim;?>' required>
					
				<label for="dia_da_semana">Dia da semana</label>
				<select id="dia_da_semana" name="dia_da_semana">
					<?php 
					
					switch ($dia_da_semana){
						case 'Segunda-feira':
							?><option value="Segunda-feira" selected>Segunda</option><?php
							?><option value="Terça-feira">Terça</option><?php
							?><option value="Quarta-feira">Quarta</option><?php
							?><option value="Quinta-feira">Quinta</option><?php
							?><option value="Sexta-feira">Sexta</option><?php
						break; 
						case 'Terça-feira':
							?><option value="Segunda-feira">Segunda</option><?php
							?><option value="Terça-feira" selected>Terça</option><?php
							?><option value="Quarta-feira">Quarta</option><?php
							?><option value="Quinta-feira">Quinta</option><?php
							?><option value="Sexta-feira">Sexta</option><?php
						break;
						case 'Quarta-feira':
							?><option value="Segunda-feira">Segunda</option><?php
							?><option value="Terça-feira">Terça</option><?php
							?><option value="Quarta-feira" selected>Quarta</option><?php
							?><option value="Quinta-feira">Quinta</option><?php
							?><option value="Sexta-feira">Sexta</option><?php
						break;
						case 'Quinta-feira':
							?><option value="Segunda-feira">Segunda</option><?php
							?><option value="Terça-feira">Terça</option><?php
							?><option value="Quarta-feira">Quarta</option><?php
							?><option value="Quinta-feira" selected>Quinta</option><?php
							?><option value="Sexta-feira">Sexta</option><?php
						break;
						case 'Sexta-feira':
							?><option value="Segunda-feira">Segunda</option><?php
							?><option value="Terça-feira">Terça</option><?php
							?><option value="Quarta-feira">Quarta</option><?php
							?><option value="Quinta-feira">Quinta</option><?php
							?><option value="Sexta-feira" selected>Sexta</option><?php
						break;
					}
					
					?>
					
				</select>	
				<!-- <input type='text' id="dia_da_semana" name='dia_da_semana' value='' required> -->
					
				<label for="materia">Matéria</label>
				<input type='text' id="materia" name='materia' value='<?php echo $materia;?>' required>
					
				<label for="professor">Professor(a)</label>
				<input type='text' id="professor" name='professor' value='<?php echo $professor;?>' required>
				
				<button id="btn-alt2-h"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i> </button>
				<a href="../../html/homeadm.php">Voltar para a <span>home</span></a>
			</form>
		</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="../../js/script.js"></script>	
	<script src="../../js/blockletras.js"></script>	
	<script src="../../js/rotinas.js"></script>	
	</body>
</html>
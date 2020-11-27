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
			
			$stmt = $pdo->prepare("SELECT * FROM horario_aula where cod_horario = $cod_horario");
			$stmt->execute();
			$num_rows = $stmt->rowCount();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
		?>
		<div class="cont-rotinas-gd">
			<h1>Alteração</h1>
			<form id="form-altera-horarios" name = "f1">
				<label>Código de horário</label>

				<label id="cod"><?php echo $row['cod_horario'] ?></label>
				<input type="hidden" id="cod_horario" name="cod_horario" value=<?php echo $row ['cod_horario'];?>>

				<label for="cod_usuario">Código de usuário</label>
				<input type='text' id="cod_usuario" name='cod_usuario' value='<?php echo $row['cod_usuario'];?>' required>
					
				<label for="cod_turma">Código de turma</label>
				<input type='text' id="cod_turma" name='cod_turma' value='<?php echo $row['cod_turma'];?>' required>
					
				<label for="horainicio">Horário de Início</label>
				<input type='text' id="horainicio" name='horainicio' value='<?php echo $row['horainicio'];?>' required>
					
				<label for="horafim">Horário de fim</label>
				<input type='text' id="horafim" name='horafim' value='<?php echo $row['horafim'];?>' required>
					
				<label for="dia_da_semana">	Dia da semana</label>
				<input type='text' id="dia_da_semana" name='dia_da_semana' value='<?php echo $row['dia_da_semana'];?>' required>
					
				<label for="materia">Matéria</label>
				<input type='text' id="materia" name='materia' value='<?php echo $row['materia'];?>' required>
					
				<label for="professor">Professor(a)</label>
				<input type='text' id="professor" name='professor' value='<?php echo $row['professor'];?>' required>
				
				<button id="btn-alt2-h"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i> </button>
				<a href="#">Voltar para a <span>home</span></a>
			</form>
		</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="../../js/script.js"></script>	
	<script src="../../js/blockletras.js"></script>	
	<script src="../../js/rotinas.js"></script>	
	</body>
</html>
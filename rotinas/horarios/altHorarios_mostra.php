<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title> Alteração de dados: Horários</title>
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
	<body>
		<?php
			include 'config.php';
			include 'mysqlexecuta.php';
			$con = conectar();
			mysql_select_db('vip');
			$codHora = $_POST["txtCod"];
			$sql="SELECT * from horario_aula where cod_horario = $codHora";
			$res = mysqlexecuta($con,$sql);
			$quant = (mysql_num_rows($res));

			if ($quant==0)
			{
				echo "Horário não Cadastrado !!";
			}
			else 	
			{
				$row = mysql_fetch_array($res);
		?>
			<div class="container2">
				<h1>Alteração</h1>
					<form name="f1" method="POST" action="altHorarios_altera.php">
						<label>Código de horário</label>
						<label id="cod"><?php echo $row['cod_horario'] ?></label>
						<input type="hidden" name="cod_horario" value=<?php echo $row ['cod_horario'];?>>

						<label for="cod_usuario">Código de usuário</label>
						<input type='text' name='cod_usuario' value='<?php echo $row['cod_usuario'];?>' required>
							
						<label for="cod_turma">Código de turma</label>
						<input type='text' name='cod_turma' value='<?php echo $row['cod_turma'];?>' required>
							
						<label for="horainicio">Horário de Início</label>
						<input type='text' name='horainicio' value='<?php echo $row['horainicio'];?>' required>
							
						<label for="horafim">Horário de fim</label>
						<input type='text' name='horafim' value='<?php echo $row['horafim'];?>' required>
							
						<label for="diaSemana">	Dia da semana</label>
						<input type='text' name='diaSemana' value='<?php echo utf8_encode($row['dia_da_semana']);?>' required>
							
						<label for="materia">Matéria</label>
						<input type='text' name='materia' value='<?php echo utf8_encode($row['materia']);?>' required>
							
						<label for="professor">Professor</label>
						<input type='text' name='professor' value='<?php echo utf8_encode($row['professor']);?>' required>
						
						<input type="submit" name ="botao" value="Alterar Dados">
						<span>voltar para o <a href="#">menu</a></span>	
					</form>
			</div>
		<?php
			}
		?>
	<script src="../js/script.js"></script>	
	<script src="../js/blockletras.js"></script>	
	</body>
</html>
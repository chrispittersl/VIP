<?php
	include_once "../../php/session_adm.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Alteração de Dados: Horários</title>
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
		<div class="cont-rotinas">
			<h1>Alteração</h1>
			<form id="form_HorariosAlt1" action="AltHorarios_mostra.php" method="POST" name="form_HorariosAlt1">
				<!-- <input type="text" id="cod_horario" name="cod_horario" list="cod" placeholder="Código do horário" autocomplete="off" required onkeypress="return blockletras(event)"> -->
				<select id="cod_horario" name="cod_horario">
					<?php
					include_once "../../php/conexao.php";
					$stmt = $pdo->prepare("SELECT cod_horario,T.cod_turma,horainicio,horafim,dia_da_semana,materia,professor,serie,nome_curso,tipo_curso,
					nome_sala FROM horario_aula AS H INNER JOIN turma  AS T ON H.cod_turma = T.cod_turma INNER JOIN curso AS 
					C ON T.cod_curso = C.cod_curso INNER JOIN sala AS S ON T.num_sala = S.num_sala");
					$stmt->execute();
					while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
					?>
						<option value="<?php echo $dados['cod_horario'];?>"><?php echo $dados['cod_horario'];?> - <?php echo $dados['serie'];?> <?php echo $dados['nome_curso']; ?></option>
					<?php
					}
					?>

				</select>
				<i class="fa fa-list-ol fa-lg" aria-hidden="true"></i>
				<button id="btn-alt1-h"><i class="fa fa-search fa-lg" aria-hidden="true"></i> </button>
				<a href="../../html/homeadm.php">Voltar para a <span>home</span></a>
			</form>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script src="../../js/script.js"></script>	
		<script src="../../js/blockletras.js"></script>
		<script src="../../js/rotinas.js"></script>
	</body>
</html>
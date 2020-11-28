<?php
	include_once "../../php/session_adm.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Pesquisa de Dados: Horários</title>
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
	<body >
		<div class="cont-rotinas">
			<h1>Pesquisa</h1>
			<form action="PesqHorarios.php" method="POST" name="f1"> 
				
				<select id="cod_turma" name="cod_turma">
					<?php
						include_once "../../php/conexao.php";
						$stmt = $pdo->prepare("SELECT cod_turma,serie,nome_curso FROM turma AS T INNER JOIN curso AS C ON T.cod_curso = C.cod_curso");
						$stmt->execute();
						while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
							?><option value="<?php echo $dados['cod_turma'];?>"><?php echo $dados['cod_turma'];?> - <?php echo $dados['serie']." ".$dados['nome_curso'];?> </option><?php
						}
					?>
				</select>
				<i class="fa fa-list-ol fa-lg" aria-hidden="true"></i>
				<button id="btn-pesq-h"><i class="fa fa-search fa-lg" aria-hidden="true"></i> </button>
				<a href="#">Voltar para a <span>home</span></a>
			</form>
		</div>
	</body>
</html>
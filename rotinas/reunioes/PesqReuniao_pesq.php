<?php
	include_once "../../php/session_adm.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Pesquisa de reuniões</title>
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
		$stmt = $pdo->prepare("SELECT * FROM reunioes order by cod_reuniao asc");
		$stmt->execute();;
		?>
		<div class="cont-rotinas">
			<h1>Pesquisa</h1>
			<form  name="f1" action="PesqReuniao.php" method="post">
				<!-- <input type="text" id="cod_reuniao" name="cod_reuniao" autocomplete="off" list="cod" required  onkeypress= "return blockletras(event)"> -->
				<select id="cod_reuniao" name="cod_reuniao">
				<?php
					while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
					?>
						<option value="<?php echo $dados['cod_reuniao'];?>"><?php echo $dados['cod_reuniao'];?> - <?php echo $dados['nome'];?></option>
					<?php
					}
					?>
				</select>
				<i class="fa fa-list-ol fa-lg" aria-hidden="true"></i>
				<button id="btn-pesq-r"><i class="fa fa-search fa-lg" aria-hidden="true"></i> </button>
				<a href="../../html/homeadm.php">Voltar para a <span>home</span></a>
			</form>
		</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>	
	<script src="../../js/rotinas.js"></script>
	<script src="../../js/script.js"></script>	
	<script src="../../js/blockletras.js"></script>	
	</body>
</html>
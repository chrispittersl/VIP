<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>PHP - Pesquisa geral de TCC</title>
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
			$stmt = $pdo->prepare("SELECT * FROM tcc order by cod_tcc asc");
			$stmt->execute();
		?>	
		<div class="cont-rotinas">
			<h1>Pesquisa</h1>
			<form action="pesqTcc.php" method="POST" name="f1">
				<!-- <input type="text" list="cod" name="nome" placeholder="Código de TCC" autocomplete="off" placeholder="Nome do TCC" required >  -->
				<select name="cod_tcc" id="cod_tcc">
					<?php
					while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
					?>
						<option value="<?php echo $dados['cod_tcc'];?>"><?php echo $dados['cod_tcc'];?> - <?php echo $dados['nome'];?></option>
					<?php
					}
					?>
				</select>
				<i class="fa fa-list-ol fa-lg" aria-hidden="true"></i>
				<button id="btn-pesq-t"><i class="fa fa-search fa-lg" aria-hidden="true"></i> </button>
				<a href="../../html/homeadm.php">Voltar para a <span>home</span></a>
			</form>
		</div>	
	</body>
</html>
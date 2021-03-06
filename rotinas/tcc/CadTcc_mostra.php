<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Cadastro de Tcc</title>
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
		?>
		<div class="cont-rotinas-gd">
			<h1>Cadastrar</h1>
			<form name="f1">

				<label for="horario_tcc">Horário tcc</label>
				<input type="time" id="horario_tcc" name="horario_tcc" placeholder="Ex: 08:00:00" required>	
				
				<label for="data_tcc">Data tcc</label>
				<input type="date" id="data_tcc" name="data_tcc" placeholder="Ex: 2001-01-01" required>	
				
				<label for="descricao">Descricao</label>
				<textarea id="descricao" name="descricao" placeholder="Ex: Apresentação de tcc do grupo..." required></textarea>
				
				<label for="nome">Nome</label>
				<input type="text" id="nome" name="nome" placeholder="Ex: VIP - Virtual Increased Plan" required>	
				
				<label for="data_agendamento">Data de agendamento</label>
				<input type="date" id="data_agendamento" name="data_agendamento" placeholder="Ex: 2001-01-01" required>	
				
				<label for="num_sala">Número de sala</label>
				<!-- <input type="text" id="num_sala" name="num_sala" required onkeypress= "return blockletras(event)"> -->
				<select name="num_sala" id="num_sala">
					<?php 
						$stmt = $pdo->prepare("SELECT * FROM sala");
						$stmt->execute();
						while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
							?><option value="<?php echo $dados['num_sala'];?>"><?php echo $dados['num_sala'];?> - <?php echo $dados['nome_sala'];?></option><?php
						}
					?>
				</select>
				<label for="cod_usuario">Código de usuario</label>
				<!-- <input type="text" id="cod_usuario" name="cod_usuario" required onkeypress= "return blockletras(event)"> -->
				<select name="cod_usuario" id="cod_usuario">
						<?php 
							$stmt = $pdo->prepare("SELECT * FROM usuario");
							$stmt->execute();
							while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
								?><option value="<?php echo $dados['cod_usuario'];?>"><?php echo $dados['cod_usuario'];?> - <?php echo $dados['usuario'];?></option><?php
							}
						?>
					</select>
				<button id="btn-cad-t"><i class="fa fa-plus fa-lg" aria-hidden="true"></i></button>
				<a href="../../html/homeadm.php">Voltar para a <span>home</span></a>
			</form>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="../../js/blockletras.js"></script>
		<script src="../../js/script.js"></script>
		<script src="../../js/rotinas.js"></script>
	</body>
</html>
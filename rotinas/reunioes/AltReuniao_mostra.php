<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Alteração de reuniões</title>
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
			$cod_reuniao = $_POST["cod_reuniao"];
			$stmt = $pdo->prepare("SELECT * from reunioes where cod_reuniao = $cod_reuniao");
			$stmt->execute();
			$num_rows = $stmt->rowCount();
				$row = $stmt->fetch(PDO::FETCH_ASSOC);
		?>

		<div class="cont-rotinas-gd">
			<h1>Alteração</h1>
			<form id="form-altera-reunioes" name = "f1">
				<label>Código de reunião</label>
				<label id="cod"><?php echo $row['cod_reuniao'] ?></label>
				<input type="hidden" id="cod_reuniao" name="cod_reuniao" value=<?php echo $row['cod_reuniao'];?>>

							<label for="horario_reuniao">Horário da Reunião</label>
							<input type='text' name='horario_reuniao' value='<?php echo $row['horario_reuniao'];?>' required>
							
							<label for="data_reuniao">Data da reunião</label>
							<input type='text' name='data_reuniao' value='<?php echo $row['data_reuniao'];?>' required>
							
							<label for="descricao">Descrição</label>
							<textarea name="descricao"><?php echo utf8_encode($row['descricao']);?> </textarea>
							
							<label for="nome">Nome</label>
							<input type='text' name='nome' value='<?php echo utf8_encode($row['nome']);?>' required>
							
							<label for="data_agendamento">Data de agentamento</label>
							<input type='text' name='data_agendamento' value='<?php echo $row['data_agendamento'];?>' required>
							
							<label for="num_sala">Número de sala</label>
							<input type='text' name='num_sala' onkeypress= "return blockletras(event)" value='<?php echo $row['num_sala'];?>' required>
							
							<label for="cod_usuario">Código de usuário</label>
							<input type='text' name='cod_usuario' onkeypress= "return blockletras(event)" value='<?php echo $row['cod_usuario'];?>' required>
						
							<button id="btn-alt2-r"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></button>
							<a href="#">Voltar para a <span>home</span></a>
						</form>
					</div>
				<?php
				}
				?>
	<script src="../js/script.js"></script>	
	<script src="../js/blockletras.js"></script>	
	</body>
</html>
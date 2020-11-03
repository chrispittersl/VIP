<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title> Alteração de Reuniões</title>
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
        <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
	</head>
	<body>
		<?php
			include 'config.php';
			include 'mysqlexecuta.php';
			$con = conectar();
			mysql_select_db('vip');
			$cod_reuniao = $_POST["cod_reuniao"];
			$sql="SELECT * from reunioes where cod_reuniao = $cod_reuniao";
			$res = mysqlexecuta($con,$sql);
			$quant = (mysql_num_rows($res));

			if ($quant==0) {
				echo " Reunião não Cadastrada!! ";
				}
				else 	{
					$row = mysql_fetch_array($res);
				?>
					<form name = "f1" method="POST" action="AltReuniao_altera.php">
					Código: <?php echo $row['cod_reuniao'] ?>
					<input type="hidden" name="cod_reuniao" value=<?php echo $row['cod_reuniao'];?>>
					Horário da Reunião:<input type='text' name='horario_reuniao' value='<?php echo $row['horario_reuniao'];?>' required>
					
					Data da reunião:<input type='text' name='data_reuniao' value='<?php echo $row['data_reuniao'];?>' required>
					
					Descrição:<input type='text' name='descricao' value='<?php echo $row['descricao'];?>' required>
					
					Nome:<input type='text' name='nome' value='<?php echo $row['nome'];?>' required>
					
					Data de agentamento:<input type='text' name='data_agendamento' value='<?php echo $row['data_agendamento'];?>' required>
					
					Número de sala:<input type='text' name='num_sala' onkeypress= "return blockletras(event)" value='<?php echo $row['num_sala'];?>' required>
					
					Código de usuário:<input type='text' name='cod_usuario' onkeypress= "return blockletras(event)" value='<?php echo $row['cod_usuario'];?>' required>
					
						<input type="submit" name ="botao" value="Alterar Dados">
					</form>
					<?php
				}
		?>
	<script src="../js/script.js"></script>	
	<script src="../js/blockletras.js"></script>	
	</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title> Alteração de dados: TC</title>
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
			$cod_tcc = $_POST["cod_tcc"];
			$sql="SELECT * from tcc where cod_tcc = $cod_tcc";
			$res = mysqlexecuta($con,$sql);
			$quant = (mysql_num_rows($res));

			if ($quant==0) 
			{
				echo "TCC requerido está sem cadastro!";
			}
			else 
			{
				$row = mysql_fetch_array($res);
		?>
			<div class="container2">	
				<h1>Alteração</h1>
					<form name = "f1" method="POST" action="Alttcc_altera.php">
					<label>Código de TCC:</label>
					<label id="cod"><?php echo $row['cod_tcc']?>
					<input type="hidden" name="cod_tcc" value=<?php echo $row['cod_tcc'];?>>
					
					<label>Horário TCC::</label>
					<input type='text' name='horario_tcc' value='<?php echo $row['horario_tcc'];?>' required>
					
					<label>Data TCC::</label>
					<input type='text' name='data_tcc' value='<?php echo $row['data_tcc'];?>' required>
					
					<label>Descricao ::</label> 
					<input type='text' name='descricao' value='<?php echo $row['descricao'];?>' required>
					
					<label>Nome::</label> 
					<input type='text' name='nome' value='<?php echo $row['nome'];?>' required>
					
					<label>Data de Agendamento::</label>
					<input type='text' name='data_agendamento' value='<?php echo $row['data_agendamento'];?>' required>
					
					<label>Numero Sala::</label>
					<input type='text' name='num_sala' onkeypress= "return blockletras(event)" value='<?php echo $row['num_sala'];?>' required>
					
					<label>Código de Usuario::</label>
					<input type='text' name='cod_usuario' onkeypress= "return blockletras(event)" value='<?php echo $row['cod_usuario'];?>' required>
					
					<input type="submit" name ="botao" value="Alterar dados">	
				</form>
			</div>	
		<?php
			}
		?>
	<script src="../js/script.js"></script>	
	<script src="../js/blockletras.js"></script>	
	</body>
</html>
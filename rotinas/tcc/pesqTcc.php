<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Pesquisa geral de TCC</title>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--CSS-->
		<link rel="stylesheet" href="../css/pesquisas.css">
        <!--ICONES BOOTSTRAP-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity = "sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin = "anonymous">
        <!--ICON PAGINA-->
        <link rel = "shortcut icon" type = "imagem/x-icon" href = "../../img/logo.ico"/>
        <!--FONTE GOOGLE USADA-->
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Archivo&display=swap" rel="stylesheet">
	</head>
	<body>
		<?php
			include_once "../../php/conexao.php";
			$cod_tcc = $_POST["cod_tcc"];
			$stmt = $pdo->prepare("SELECT * FROM tcc where cod_tcc=$cod_tcc");
			$stmt->execute();

		?>
		<div class="cont-pesq2">
			<table>
				<tr>
					<th>Código TCC</th>	
					<th>Horario TCC</th>	
					<th>Data TCC</th>	
					<th id="espaco">Descrição</th>	
					<th>Nome</th>	
					<th>Data de agendamento</th>	
					<th>Número Sala</th>	
					<th>Código de usuário</th>
				</tr>
			<?php
				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
				{
			?>	
				<tr>
					<td id="corpreta"><?php echo $row['cod_tcc'];?></td>	
					<td id="corpreta"><?php echo date('H:i',strtotime($row['horario_tcc']));?></td>	
					<td id="corpreta"><?php echo date('d/m/Y',strtotime($row['data_tcc']));?></td>	
					<td id="corpreta"><?php echo $row['descricao'];?></td>
					<td id="corpreta"><?php echo $row['nome'];?></td>	
					<td id="corpreta"><?php echo date('d/m/Y',strtotime($row['data_agendamento']));?></td>	
					<td id="corpreta"><?php echo $row['num_sala'];?></td>	
					<td id="corpreta"><?php echo $row['cod_usuario'];?></td>
				</tr>

		<?php
				}
			
		?>
			</table>
			
		</div>
		<div class="btn-home">
			<a href="../../html/homeadm.php">HOME </a>
		</div>
	</body>
</html>
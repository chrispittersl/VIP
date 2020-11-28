<?php
	include_once "../../php/session_adm.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Pesquisa de Reuniões</title>
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
			$cod_reuniao = $_POST["cod_reuniao"];
			$stmt = $pdo->prepare("SELECT * FROM reunioes where cod_reuniao like '$cod_reuniao%' order by cod_reuniao");
			$stmt->execute();
			$num_rows = $stmt->rowCount();
		?>
		<div class="cont-pesq">
			<table> 
				<tr id="titulo"> 
					<th>Nome</th>
					<th>Código da reunião</th>
					<th>Horário da reunião</th>
					<th>Data que irá ocorrer</th>
					<th>Descrição</th>
					<th>Data de agendamento</th>
					<th>Número da sala</th>
					<th>Código de usuário</th>
				</tr>	
		<?php
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
			{
		?>

					<tr>
						<td><?php echo $row['nome'];?></td>
						<td><?php echo $row['cod_reuniao'];?></td>
						<td><?php echo date('H:i', strtotime($row['horario_reuniao']));?></td>
						<td><?php echo date('d/m/Y', strtotime($row['data_reuniao']));?></td>
						<td><?php echo $row['descricao'];?></td>
						<td><?php echo date('d/m/Y', strtotime($row['data_agendamento']));?></td>
						<td><?php echo $row['num_sala'];?></td>
						<td><?php echo $row['cod_usuario'];?></td>
					</tr>
		<?php
			} //fecha o while
		?>
			</table>
			<a href="../../html/homeadm.php">home </a>
		</div>
	</body>
</html>
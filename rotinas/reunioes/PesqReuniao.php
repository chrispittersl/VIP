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
			include 'config.php';
			include 'mysqlexecuta.php';
			$con = conectar();
			mysql_select_db('vip');
			$cod_reuniao = $_POST["cod_reuniao"];
			$sql = "SELECT * FROM reunioes where cod_reuniao like '$cod_reuniao%' order by cod_reuniao";
			$res = mysqlexecuta($con,$sql);
			$quant = (mysql_num_rows($res));
			if ($quant==0){
				echo "Reunião não cadastrada";
			}
			else{
		?>
		<div class="cont-pesq">
			<table> 
				<tr id="titulo"> 
					<th>Nome</th>
					<th>Código da reunião</th>
					<th>Horário da reunião</th>
					<th>Data da reunião</th>
					<th>Descrição</th>
					<th>Data de agendamento</th>
					<th>Número da sala</th>
					<th>Código de usuário</th>
				</tr>	
		<?php
			while ($row = mysql_fetch_array($res)) 
			{
		?>

					<tr>
						<td><?php echo utf8_encode($row['nome']);?></td>
						<td><?php echo $row['cod_reuniao'];?></td>
						<td><?php echo $row['horario_reuniao'];?></td>
						<td><?php echo $row['data_reuniao'];?></td>
						<td><?php echo utf8_encode($row['descricao']);?></td>
						<td><?php echo $row['data_agendamento'];?></td>
						<td><?php echo $row['num_sala'];?></td>
						<td><?php echo $row['cod_usuario'];?></td>
					</tr>
		<?php
			} //fecha o while
		} // fecha o if
		?>
			</table>
			<a href="#">home </a>
		</div>
	</body>
</html>
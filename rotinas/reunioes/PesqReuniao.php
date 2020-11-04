	<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Pesquisa de Reuniões</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--CSS-->
		<link rel="stylesheet" href="../../css/pesquisas.css">
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
			$ReuniaoNome = $_POST["Nome"];
			$sql = "SELECT * FROM reunioes where nome like '$ReuniaoNome%' order by nome";
			$res = mysqlexecuta($con,$sql);
			$quant = (mysql_num_rows($res));
			if ($quant==0){
				echo "Reunião não cadastrada";
			}
			else{
		?>
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
						<td><?php echo $row['nome'];?></td>
						<td><?php echo $row['cod_reuniao'];?></td>
						<td><?php echo $row['horario_reuniao'];?></td>
						<td><?php echo $row['data_reuniao'];?></td>
						<td><?php echo $row['descricao'];?></td>
						<td><?php echo $row['data_agendamento'];?></td>
						<td><?php echo $row['num_sala'];?></td>
						<td><?php echo $row['cod_usuario'];?></td>
					</tr>
		<?php
			} //fecha o while
		} // fecha o if
		?>
		</table>
	</body>
</html>
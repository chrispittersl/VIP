<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Pesquisa de Horários</title>
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
	<body >
		<?php
			include 'config.php';
			include 'mysqlexecuta.php';
			$con = conectar();
			mysql_select_db('vip');
			$cod_turma = $_POST["cod_turma"];
			$sql = "SELECT * FROM horario_aula where cod_turma like '$cod_turma%' order by cod_turma";
			$res = mysqlexecuta($con,$sql);
			$quant = (mysql_num_rows($res));
			if ($quant==0)
			{
				echo "Horários da turma não Cadastrado";
			}
			else{
		?>
			<table> 
				<tr id="titulo"> 
					<th>Cód. Horário</th>
					<th>Cód. Usuário</th>
					<th>Cód. Turma</th>
					<th>Hora Inicio</th>
					<th>Hora Fim</th>
					<th>Dia</th>
					<th>Materia</th>
					<th>Professor</th>
				</tr>	
			<?php
				while ($row = mysql_fetch_array($res)) 
				{
			?>
				<tr>
					<td><?php echo $row['cod_horario'];?></td>
					<td><?php echo $row['cod_usuario'];?></td>
					<td><?php echo $row['cod_turma'];?></td>
					<td><?php echo $row['horainicio'];?></td>
					<td><?php echo $row['horafim'];?></td>
					<td><?php echo utf8_encode($row['dia_da_semana']);?></td>
					<td><?php echo utf8_encode($row['materia']);?></td>
					<td><?php echo utf8_encode($row['professor']);?></td>
				</tr>
		<?php
			} 
		} 
		?>
		</table>
	</body>
</html>
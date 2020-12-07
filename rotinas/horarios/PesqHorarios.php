<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Pesquisa de Horários</title>
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
		<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
		
	<body>
		<?php
			include_once "../../php/conexao.php";
			$cod_turma = $_POST["cod_turma"];
			$stmt = $pdo->prepare("SELECT * FROM horario_aula where cod_turma = $cod_turma order by cod_turma");
			$stmt->execute();
		?>
		<div class="cont-pesq">
			<table>
				<tr id="titulo"> 
					<th id="espaco">Cód. Horário</th>
					<th id="espaco">Cód. Usuário</th>
					<th id="espaco">Cód. Turma</th>
					<th>Hora Início</th>
					<th>Hora Fim</th>
					<th>Dia</th>
					<th>Matéria</th>
					<th>Professor</th>
				</tr>	
			<?php
				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
				{
			?>
				<tr>
					<td><?php echo $row['cod_horario'];?></td>
					<td><?php echo $row['cod_usuario'];?></td>
					<td><?php echo $row['cod_turma'];?></td>
					<td><?php echo date("H:i",strtotime($row['horainicio']));?></td>
					<td><?php echo date("H:i",strtotime($row['horafim']));?></td>
					<td><?php echo $row['dia_da_semana'];?></td>
					<td><?php echo $row['materia'];?></td>
					<td><?php echo $row['professor'];?></td>
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
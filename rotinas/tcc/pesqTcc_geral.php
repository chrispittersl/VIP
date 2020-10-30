<html lang="pt-br">
<head>
<title>PHP - Pesquisa geral de TCC</title>
</head>
<body >
<?php
	include 'config.php';
	include 'mysqlexecuta.php';
	$con = conectar();
	mysql_select_db('vip');
	$sql = "SELECT * FROM TCC order by nome";
	$res = mysqlexecuta($con,$sql);
?>

<table p align ="center"  border="1" width="750">
		<td p aling="center" colspan=2>
				 
			 <font color=#A0232C colspan=2>TCC em Ordem Alfabética 
<table p align ="center"   width="750" cellpadding="0" cellspacing="0" border="1">
			Código TCC
			Horario TCC
			Data TCC
			Descricao
			Nome
			Data de Agendamento
			Numero Sala
			Código Usuario
<?php
	while ($row = mysql_fetch_array($res)) {
?>
			<?php echo $row['cod_TCC'];?>
			<?php echo $row['horario_TCC'];?>
			<?php echo $row['data-TCC'];?>
			<?php echo $row['descricao'];?>
			<?php echo $row['nome'];?>
			<?php echo $row['data_agendamento'];?>
			<?php echo $row['num_sala'];?>
			<?php echo $row['cod_usuario'];?>
		
<?php 
	}
?> 
</body>
</body>
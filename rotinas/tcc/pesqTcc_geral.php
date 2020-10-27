<html>
<head>
<title>PHP - Pesquisa geral de tcc</title>
</head>
<body bgcolor=white>
<?php
	include 'config.php';
	include 'mysqlexecuta.php';
	$con = conectar();
	mysql_select_db('vip');
	$sql = "SELECT * FROM tcc order by nome";
	$res = mysqlexecuta($con,$sql);
?>
<br><br><br><br><br><br><br>
<table p align ="center" bgcolor=white border="1" width="750">
	<tr> 
		<td p aling="center" colspan=2>
			<center><img src="logotipo-cps.png" width="440" height="120" border="0" align=center></center>	
		</td> 
	</tr>
	<tr>
		<td>
			<p align="center"> <b><font color=#A0232C colspan=2>TCC em Ordem Alfabética </font></b></p>
		</td>
	</tr>
<table p align ="center"  bgcolor=white width="750" cellpadding="0" cellspacing="0" border="1">
	<tr> 
		<td>
			<b><font color=#A0232C>Código Tcc</font></b>
		</td>
		<td>
			<b><font color=#A0232C>Horario Tcc</font></b>
		</td>
		<td>
			<b><font color=#A0232C>Data Tcc</font></b>
		</td>
		<td>
			<b><font color=#A0232C>Descricao</font></b>
		</td>
		<td>
			<b><font color=#A0232C>Nome</font></b>
		</td>
		<td>
			<b><font color=#A0232C>Data de Agendamento</font></b>
		</td>
		<td>
			<b><font color=#A0232C>Numero Sala</font></b>
		</td>
		<td>
			<b><font color=#A0232C>Código Usuario</font></b>
		</td>
	</tr>
<?php
	while ($row = mysql_fetch_array($res)) {
?>
	<tr>
		<td>
			<?php echo $row['cod_tcc'];?>
		</td>
		<td>
			<?php echo $row['horario_tcc'];?>
		</td>
		<td>
			<?php echo $row['data-tcc'];?>
		</td>
		<td>
			<?php echo $row['descricao'];?>
		</td>
		<td>
			<?php echo $row['nome'];?>
		</td>
		<td>
			<?php echo $row['data_agendamento'];?>
		</td>
		<td>
			<?php echo $row['num_sala'];?>
		</td>
		<td>
			<?php echo $row['cod_usuario'];?>
		</td>
		
	</tr>
<?php 
	}
?>
</table> <br><br>
<p> <a href='index.html'><p align="center">Voltar para Menu Principal</p></a>
</body>
</body>
<html>
<head>
<title>Pesquisa geral de Tcc</title>
</head>
<body>
<center> 
<?php
	include 'config.php';
	include 'mysqlexecuta.php';
	$con = conectar();
	mysql_select_db('vip');
	$nome = $_POST["nome"];
	$sql = "SELECT * FROM tcc where nome like '$nome%' order by nome";
	$res = mysqlexecuta($con,$sql);
	$quant = (mysql_num_rows($res));
	if ($quant==0){
		echo "p align='center'><b><font color=#A22529>Tcc não Cadastrado(a)</font></b></p>";
	}
	else{
?>
<p align = "center"><table border="1" width="750">
<tr>
	<td>Tcc em Ordem Alfabética</b></p></td>
</tr>
<table>
	<tr> 
		<td>
			<b>Código Tcc\/b>
		</td>
		<td>
			<b>Horario Tcc</b>
		</td>
		<td>
			<b>Data Tcc</b>
		</td>
		<td>
			<b>Descricao</b>
		</td>
		<td>
			<b>Nome</b>
		</td>
		<td>
			<b>Data de Agendamento</b>
		</td>
		<td>
			<b>Numero Sala</b>
		</td>
		<td>
			<b>Código Usuario</b>
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
			<?php echo $row['data_tcc'];?>
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
	} //fecha o while
	} // fecha o if
?>
</table><p><p>
<br><br>
<a href='pesqTcc_geral.php'><p align="center">Listar TCC</p></a>
</body>
</html>
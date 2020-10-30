<html>
<head>
<title>Pesquisa de Reuniões</title>
</head>
<body>
<center>
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
		echo "p align='center'><b>Reunião não cadastrada</b></p>";
	}
	else{
?>
<p align = "center"><table border="1" width="750">
<tr>
	<td>><p align="center"><b>Reuniões em Ordem Alfabética</b></p></td>
</tr>
<table width=750 cellpadding=0 cellspacing=0 border=1>
	<tr> 
		<td>
			<b>Nome</b>
		</td>
		<td>
			<b>Código da reunião</b>
		</td>
		<td>
			<b>Horário da reunião</b>
		</td>
		<td>
			<b>Data da reunião</b>
		</td>
		<td>
			<b>Descrição</b>
		</td>
		<td>
			<b>Data de agendamento</b>
		</td>
		<td>
			<b>Número da sala</b>
		</td>
		<td>
			<b>Código de usuário</b>
		</td>
	</tr>
<?php
	while ($row = mysql_fetch_array($res)) {
?>
	<tr>
		<td>
			<?php echo $row['nome'];?>
		</td>
		<td>
			<?php echo $row['cod_reuniao'];?>
		</td>
		<td>
			<?php echo $row['horario_reuniao'];?>
		</td>
		<td>
			<?php echo $row['data_reuniao'];?>
		</td>
		<td>
			<?php echo $row['descricao'];?>
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
<a href='PesqReuniao_geral.php'><p align="center">Listar Reuniões</p></a>
</body>
</html>
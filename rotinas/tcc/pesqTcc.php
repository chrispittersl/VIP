<html lang="pt-br">
<head>
<title>Pesquisa geral de TCC</title>
</head>
<body>
 
<?php
	include 'config.php';
	include 'mysqlexecuta.php';
	$con = conectar();
	mysql_select_db('vip');
	$nome = $_POST["nome"];
	$sql = "SELECT * FROM TCC where nome like '$nome%' order by nome";
	$res = mysqlexecuta($con,$sql);
	$quant = (mysql_num_rows($res));
	if ($quant==0){echo "TCC não Cadastrado(a)";
	}
	else{
?>

	TCC em Ordem Alfabética
<table>	Código TCC\/b>	Horario TCC	Data TCC	Descricao	Nome	Data de Agendamento	Numero Sala	Código Usuario
<?php
	while ($row = mysql_fetch_array($res)) {
?>	<?php echo $row['cod_TCC'];?>	<?php echo $row['horario_TCC'];?>	<?php echo $row['data_TCC'];?>	<?php echo $row['descricao'];?>	<?php echo $row['nome'];?>	<?php echo $row['data_agendamento'];?>	<?php echo $row['num_sala'];?>	<?php echo $row['cod_usuario'];?>

<?php
	} //fecha o while
	} // fecha o if
?>

<a href='pesqTCC_geral.php'>Listar TCC</a>
</body>
</html>
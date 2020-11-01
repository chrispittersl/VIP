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
	if ($quant==0){echo "TCC requerido está sem cadastro(a)";
	}
	else{
?>
	Código TCC	
	Horario TCC	
	data TCC	
	Descricao	
	Nome	
	data de agendamento	
	Nmero 
	Sala	
	Código de usuário
<?php
	while ($row = mysql_fetch_array($res)) {
?>	
	<br>
	<?php echo $row['cod_TCC'];?>	
	<?php echo $row['horario_TCC'];?>	
	<?php echo $row['data_TCC'];?>	
	<?php echo $row['descricao'];?>	
	<?php echo $row['nome'];?>	
	<?php echo $row['data_agendamento'];?>	
	<?php echo $row['num_sala'];?>	
	<?php echo $row['cod_usuario'];?>

<?php
	} //fecha o while
	} // fecha o if
?>

</body>
</html>
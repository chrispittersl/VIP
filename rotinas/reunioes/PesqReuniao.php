<html lang="pt-br">
<head>
<title>Pesquisa de Reuniões</title>
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
			Nome
			Código da reunião
			Horário da reunião
			Data da reunião
			Descrição
			Data de agendamento
			Número da sala
			Código de usuário
<?php
echo "<br>";	
while ($row = mysql_fetch_array($res)) {
?>
			<br>
			<?php echo $row['nome'];?>
			<?php echo $row['cod_reuniao'];?>
			<?php echo $row['horario_reuniao'];?>
			<?php echo $row['data_reuniao'];?>
			<?php echo $row['descricao'];?>
			<?php echo $row['data_agendamento'];?>
			<?php echo $row['num_sala'];?>
			<?php echo $row['cod_usuario'];?>
<?php
	} //fecha o while
	} // fecha o if
?>
</body>
</html>
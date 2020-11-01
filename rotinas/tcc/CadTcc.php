<html lang="pt-br">
	<head><title>Inclusão de registros na tabela TCC</title>
	</head>
	<?php	
	$horario_TCC =$_POST["horario_TCC"];	
	$data_TCC =$_POST["data_TCC"];	
	$descricao =$_POST["descricao"];	
	$nome =$_POST["nome"];	
	$data_agendamento =$_POST["data_agendamento"];	
	$num_sala =$_POST["num_sala"];	
	$cod_usuario =$_POST["cod_usuario"];		
	include 'config.php';	
	include 'mysqlexecuta.php';		
	$con = conectar();		
	mysql_select_db('vip');		
	$sql = "insert into TCC(horario_TCC,data_TCC,descricao,nome,data_agendamento,num_sala,cod_usuario )Values('$horario_TCC','$data_TCC','$descricao','$nome','$data_agendamento','$num_sala', '$cod_usuario')";		
	$res = mysqlexecuta($con,$sql);		
	echo  "inclusão efetuado com sucesso !!";?>
	</body>
</html>
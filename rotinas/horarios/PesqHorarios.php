<html lang="pt-br">
<head>
<title>Pesquisa de Horários</title>
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
	if ($quant==0){
		echo "Horários da turma não Cadastrado";
	}
	else{
?>
			Horários
			Cód. Horário
			Cód. Usuário
			Cód. Turma
			Hora Inicio
			Hora Fim
			Dia
			Materia
			Professor
<?php
	while ($row = mysql_fetch_array($res)) {
?>
			<br>
			<?php echo $row['cod_horario'];?>
			<?php echo $row['cod_usuario'];?>
			<?php echo $row['cod_turma'];?>
			<?php echo $row['horainicio'];?>
			<?php echo $row['horafim'];?>
			<?php echo $row['dia da semana'];?>
			<?php echo $row['materia'];?>
			<?php echo $row['professor'];?>
<?php
	} 
} 
?>

</body>
</html>
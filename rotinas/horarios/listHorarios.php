<html lang="pt-br">
<head>
<title>Pesquisa de Horários</title>
</head>
<body >
 <img src = "logotipo-cps.png">
<?php
	include 'config.php';
	include 'mysqlexecuta.php';
	$con = conectar();
	mysql_select_db('vip');
	$serie = $_POST["serieTurma"];
	$sql = "SELECT * FROM horario_aula where serie like '$serie%' order by materia";
	$res = mysqlexecuta($con,$sql);
	$quant = (mysql_num_rows($res));
	if ($quant==0){
		echo "Aluno(a) não Cadastrado(a)";
	}
	else{
?>
			Horários
			Cód. Horário
			Hora Inicio
			Hora Fim
			Dia
			Materia
			Professor
<?php
	while ($row = mysql_fetch_array($res)) {
?>
			<?php echo $row['cod_horario'];?>
			<?php echo $row['horainicio'];?>
			<?php echo $row['horafim'];?>
			<?php echo $row['materia'];?>
			<?php echo $row['professor'];?>
<?php
	} 
} 
?>

</body>
</html>
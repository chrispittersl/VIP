<html>
<head>
<title>Pesquisa de Horários</title>
</head>
<body bgcolor=white>
<center> <img src = "logotipo-cps.png">
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
		echo "p align='center'><b><font color=#A22529>Aluno(a) não Cadastrado(a)</font></b></p>";
	}
	else{
?>
<p align = "center"><table border="1" width="750">
<tr>
	<td>><p align="center"><b><font color=#A22529>Horários</font></b></p></td>
</tr>
<table width=750 cellpadding=0 cellspacing=0 border=1>
	<tr> 
		<td>
			<b><font color=#A22529>Cód. Horário</font></b>
		</td>
		<td>
			<b><font color=#A22529>Hora Inicio</font></b>
		</td>
		<td>
			<b><font color=#A22529>Hora Fim</font></b>
		</td>
		<td>
			<b><font color=#A22529>Dia</font></b>
		</td>
		<td>
			<b><font color=#A22529>Materia</font></b>
        </td>
        <td>
			<b><font color=#A22529>Professor</font></b>
		</td>
	</tr>
<?php
	while ($row = mysql_fetch_array($res)) {
?>
	<tr>
		<td>
			<?php echo $row['cod_horario'];?>
		</td>
		<td>
			<?php echo $row['horainicio'];?>
		</td>
		<td>
			<?php echo $row['horafim'];?>
		</td>
		<td>
			<?php echo $row['materia'];?>
		</td>
		<td>
			<?php echo $row['professor'];?>
		</td>
	</tr>
<?php
	} 
} 
?>
</table><p><p>
<br><br>
<a href='pesqaluno_geral.php'><p align="center">Listar Alunos</p></a>
</body>
</html>
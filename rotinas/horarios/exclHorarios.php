<html>
<head>
<title>Exclusão de cursos</title>
</head>
<body bgcolor=white>
<center> <img src="logotipo-cps.png"> </center>
<?php
	include 'config.php';
	include 'mysqlexecuta.php';
	$con = conectar();
	mysql_select_db('vip');
	$cod_horario = $_POST ["cod_horario"];
	$sql =  "SELECT * FROM horario_aula where cod_horario = $cod_horario";
	$res = mysqlexecuta($con,$sql);
	$quant = (mysql_num_rows($res)); 
	if ($quant==0){
		echo "<p align='center'><b><font color=#A22529>Horário não Cadastrado</font></b></p>";
	}
	else{
		$sql = "delete from horario_aula where cod_horario = $cod_horario";
		$res = mysqlexecuta($con,$sql);
		echo "<p align = 'center'><b><font color=#A22529><font color = '#A22529'> Excluido com Sucesso</font></b></p>";
	}
	?>
	<br><br><br>
	<a href = 'pesqcurso_geral.php'><font color=#A22529><p align = "center">Listar Disciplinas</p></a>
	</body>
	</html>
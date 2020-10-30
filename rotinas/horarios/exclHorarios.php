<html lang="pt-br">
<head>
<title>Exclusão de cursos</title>
</head>
<body >
 <img src="logotipo-cps.png"> 
<?php
	include 'config.php';
	include 'mysqlexecuta.php';
	$con = conectar();
	mysql_select_db('vip');
	$cod_horario = $_POST ["cod_horario"];
	$sql =  "SELECT * FROM horario_aula where cod_horario = $cod_horario";
	$res = mysqlexecuta($con,$sql);
	$quant = (mysql_num_rows($res)); 
	if ($quant==0){echo "Horário não Cadastrado";
	}
	else{$sql = "delete from horario_aula where cod_horario = $cod_horario";$res = mysqlexecuta($con,$sql);echo " Excluido com Sucesso";
	}
	?>
	
	<a href = 'pesqcurso_geral.php'>Listar Disciplinas</a>
	</body>
	</html>
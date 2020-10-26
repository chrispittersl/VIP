<hmtl>
	<head>
		<title>
			Inclusão de registros em Horário de Aula
        </title>
        <meta charset="utf-8">
	</head>
	<body bgcolor=white>
		<center>
			<img src="logotipo-cps.png">
		</center>
		<?php
            $horarioinicio=$_POST["horainicio"];
            $horariofim=$_POST["horafim"];
			$diaSemana=$_POST["diaSemana"];
			$materia=$_POST["mat"];
			$professor=$_POST["prof"];
			
			include 'config.php';
			include 'mysqlexecuta.php';
			
			$con = conectar();
			
			mysql_select_db('vip');
			
			$sql = "insert into horario_aula(horarioinicio,horariofim,diaSemana,materia,professor) Values ('$horarioinicio','$horariofim','$diaSemana','$materia','$professor')";
			
			$res = mysqlexecuta($con,$sql);
			
			echo "<p align='center'>" . "<b>" . "<font color = red>" . "inclusão efetuada com sucesso !!" . "</font>" . "</b>" . "</p>" . "<br>";
			echo "<a href = 'pesqcurso_geral.php'><font color=#A22529><p align = 'center'>Listar Cursos</p></a>"
		?>
	</body>
</hmtl>
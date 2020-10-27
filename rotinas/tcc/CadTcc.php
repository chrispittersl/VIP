<hmtl>
	<head>
		<title>
			Inclusão de registros na tabela Tcc
		</title>
	</head>
	<body bgcolor=white>
		<center>
			<img src="logotipo-cps.png">
		</center>
		<?php
			$horario_tcc =$_POST["horario_tcc"];
			$data_tcc =$_POST["data_tcc"];
			$descricao =$_POST["descricao"];
			$nome =$_POST["nome"];
			$data_agendamento =$_POST["data_agendamento"];
			$num_sala =$_POST["num_sala"];
			$cod_usuario =$_POST["cod_usuario"];
			
			include 'config.php';
			include 'mysqlexecuta.php';
			
			$con = conectar();
			
			mysql_select_db('vip');
			
			$sql = "insert into tcc(horario_tcc,data_tcc,descricao,nome,data_agendamento,num_sala,cod_usuario )Values('$cod_tcc','$horario_tcc','$data_tcc','$descricao','$nome','$data_agendamento','$num_sala', '$cod_usuario')";
			
			$res = mysqlexecuta($con,$sql);
			
			echo "<p align='center'>" . "<b>" . "<font color = red>" . "inclusão efetuada com sucesso !!" . "</font>" . "</b>" . "</p>" . "<br>";
			echo "<a href = 'pesqTcc_geral.php'><font color=#A22529><p align = 'center'>Listar Tcc</p></a>"
		?>
	</body>
</html>
<html lang="pt-br">
	<head>
		<title>
			Inclusão de registros na tabela Reunião
		</title>
	<meta charset="utf=8">
	</head>
		<?php
			$horario_reuniao=$_POST["horario_reuniao"];
			$data_reuniao=$_POST["data_reuniao"];
			$descricao=$_POST["descricao"];
			$nome=$_POST["nome"];
			$data_agendamento=$_POST["data_agendamento"];
			$num_sala=$_POST["num_sala"];
			$cod_usuario=$_POST["cod_usuario"];
			
			include 'config.php';
			include 'mysqlexecuta.php';
			
			$con = conectar();
			
			mysql_select_db('vip');
			
			$sql = "insert into reunioes(horario_reuniao,data_reuniao,descricao,nome,data_agendamento,num_sala,cod_usuario)
			Values('$horario_reuniao','$data_reuniao','$descricao','$nome','$data_agendamento',$num_sala,$cod_usuario)";
			
			$res = mysqlexecuta($con,$sql);
			
			echo "<p align='center'>" . "inclusão efetuada com sucesso!" . "</p>" . "<br>";
		?>
	</body>
</hmtl>
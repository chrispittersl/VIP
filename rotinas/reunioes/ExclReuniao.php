<html >
	<head>
		<title>
			Exclusão de Reuniões
		</title>
	</head>
	<body>
		<?php
			include 'config.php';
			include 'mysqlexecuta.php';
			$con = conectar();
			mysql_select_db('vip');
			$cod_reuniao = $_POST["cod_reuniao"];
			$sql =  "SELECT * FROM reunioes where cod_reuniao = $cod_reuniao";
			$res = mysqlexecuta($con,$sql);
			$quant = (mysql_num_rows($res)); 
			if ($quant==0){
				echo "<p align='center'><b>Aluno(a) não Cadastrado(a)</b></p>";
			}
			else{
				$sql = "delete from reunioes where cod_reuniao = $cod_reuniao";
				$res = mysqlexecuta($con,$sql);
				echo "<p align = 'center'><b> Excluido com Sucesso</b></p>";
			}
		?>
	<a href = 'PesqReuniao_geral.php'><p align = "center"> Listar Reuniões </p></a>
	</body>
</html>
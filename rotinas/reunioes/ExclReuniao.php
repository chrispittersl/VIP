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
				echo "Aluno(a) não Cadastrado(a)";
			}
			else{
				$sql = "delete from reunioes where cod_reuniao = $cod_reuniao";
				$res = mysqlexecuta($con,$sql);
				echo " Excluido com Sucesso";
			}
		?>
	</body>
</html>
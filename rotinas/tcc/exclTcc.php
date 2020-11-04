<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Exclusão de TCC</title>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--CSS-->
		<link rel="stylesheet" href="../../css/rotinas.css">
        <!--ICONES BOOTSTRAP-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity = "sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin = "anonymous">
        <!--ICON PAGINA-->
        <link rel = "shortcut icon" type = "imagem/x-icon" href = "../../img/logo.ico"/>
        <!--FONTE GOOGLE USADA-->
        <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
	</head>
	<body>
		<?php
			include 'config.php';
			include 'mysqlexecuta.php';
			$con = conectar();
			mysql_select_db('vip');
			$cod_TCC = $_POST["cod_TCC"];
			$sql = "SELECT * FROM TCC where cod_tcc = $cod_TCC";
			$res = mysqlexecuta($con,$sql);
			$quant = (mysql_num_rows($res)); 
			
			if ($quant==0)
			{
				echo "TCC requerido está sem cadastro(a)";
			}
			else
			{
				$sql = "delete from TCC where cod_TCC = $cod_TCC";
				$res = mysqlexecuta($con,$sql);echo "Excluido com Sucesso";
			}
		?>
	</body>
</html>
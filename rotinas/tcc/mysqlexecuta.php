<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>PHP - Função Executa Comandos SQL</title>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--CSS-->
		<link rel="stylesheet" href="../../css/rotinas2.css">
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
			function mysqlexecuta($id,$sql,$erro = 1){
				if(empty($sql) or !(id))
					return 0;
				if(!($res = @mysql_query($sql,$id))){
					if($erro)
						echo "<br> Ocorreu um erro na excução do Comando SQL no banco de dados. Favor Contactar o Administrador";
						echo "<br> Comando: ".$sql."Id: ".$id;
						exit;
				}
				return $res;
			}
		?>
	</body>
</html>
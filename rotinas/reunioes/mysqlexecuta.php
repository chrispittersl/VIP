<html lang="pt-br">
<head>
<title>PHP - Função Executa Comandos SQL</title>
</head>
<body>
<?php
	function mysqlexecuta($id,$sql,$erro = 1){
		if(empty($sql) or !(id))
			return 0;
		if(!($res = @mysql_query($sql,$id))){
			if($erro)
				echo "Ocorreu um erro na excução do Comando SQL no banco de dados. Favor Contactar o Administrador";
				echo "<br> Comando: ".$sql."Id: ".$id;
				exit;
		}
		return $res;
	}
?>
</body>
</html>
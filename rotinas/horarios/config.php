<html lang="pt-br">
<head>
<title>Configurar</title>
</head>
<body >
<?php
	
	error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
	
	function conectar(){
		$hostdb = '127.0.0.1';
		$userdb = 'root';
		$passdb = '';
		
		if ($con = mysql_pconnect($hostdb, $userdb, $passdb)){
			return $con;
		}
		else{
			return 0;
		}
	}
?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>
			Login
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="../css/login.css">
		<!--ICON-->
		<link rel = "shortcut icon" type = "imagem/x-icon" href = "../img/logo.ico"/>
		<!--BOOTSTRAP-->
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		
		<!--FONTE-->
		<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
		
	</head>

	<body>
		

		<div class="container">
			<h1>Login</h1>

			<form id="form-login" name="Login" action="" method="POST">
				<label for="email"> Usuário</label>
				<input type="text" name="user" id="user" placeholder="Digite seu usuário" maxlength="5" autocomplete="off" required>
				<label for="password"> Senha</label>
				<input type="password" name="senha" id="senha" placeholder="Digite sua senha" maxlength="5" autocomplete="off" onkeypress  = "return blockletras(event)" required>
				<input type="submit" value="Login" id="btn-submit">
				<a href="#" id="visitante">Acesse como Visitante</a>

			</form>
			<?php
			
			
				if(isset($_POST['SubmitButton']))
				{
					include 'config.php';
					include 'mysqlexecuta.php';
					$con = conectar ();
					mysql_select_db ('vip');
					$Usuario = $_POST['user'];
					$Senha = $_POST ['senha'];
					$sql="SELECT * FROM usuario where usuario like '$Usuario' && senha like '$Senha'";
					$res = mysqlexecuta($con, $sql);
					$quant = (mysql_num_rows($res));
					if($quant==0){
						echo "<script type='javascript'> alert('Login ou Senha Inválidos !!!'); </script>";
					}
					else{
						header("location:../html/home.html");
					}
				}
				else
				{
					
				}
				
			?>

		</div>

	<!--IMPORTANDO O JAVASCRIPT-->
	<script src="../js/jQuery.js"></script>
	<script src="../js/script.js"></script>	
	<script src="../js/blockletras.js"></script>		
	</body>
</html>

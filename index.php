<?php
    session_start();
    $logged = $_SESSION['logged'] ?? NULL;
    if($logged==TRUE){
        if($_SESSION['user']=="adm"){
            header("Location: html/homeadm.php");
        }
        else{
            header("Location: html/home.php");
        }
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--CSS-->
        <link rel="stylesheet" href="css/login.css">
        <!--ICONES BOOTSTRAP-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity = "sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin = "anonymous">
        <!--ICON PAGINA-->
        <link rel = "shortcut icon" type = "imagem/x-icon" href = "img/logo.ico"/>
        <!--FONTE GOOGLE USADA TITULO-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
        <!-- FONTE CORPO DO SITE -->
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Archivo&display=swap" rel="stylesheet">
        <!--IMPORTANDO JQUERY-->
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    </head>

    <body>
        <div class="cont-login">
            <div class="content">
                <div class="first-column">
                    <img src="img/logo-mobile.png">
                    <h1 class="title">Login</h1>
                    <a class="visit" href="html/home-visitante.php">Acesse como <span>Visitante</span></a>
                </div>

                <div class="second-column">
                    <form id="form-login" name="form-login">
                        <input type="text" name="user" id="user" placeholder="Digite seu usuário" maxlength="5" autocomplete="off" required>
                        <i class='far fa-user-circle fa-lg'></i>
                        
                        <input type="password" name="password" id="password" placeholder="Digite sua senha" maxlength="5" autocomplete="off" onkeypress  = "return blockletras(event)" required>
                        <i class='fas fa-key fa-lg'></i>
                        <div class="erro" id="errorLogin">
                            Login Inválido
                        </div>
                    
                        <input type="submit" form="form-login"  value="Login" id="btn-submit">

                        <div class="visitante-mobile">
                            <a class="visit" href="html/home-visitante.php"><span>Acesse como</span> Visitante</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- script  -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="js/blockletras.js"></script>
        <script src="js/login.js"></script>	
    </body>
</html>
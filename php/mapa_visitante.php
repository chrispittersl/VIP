<!DOCTYPE html>
<html>
    <head>
        <title>Mapa Simples</title>
        <meta charset="utf-8">
        <!--CSS-->
		<link rel="stylesheet" href="../css/mapa.css">
        <!-- Bootstrap 4 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <!--ICONES BOOTSTRAP-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity = "sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin = "anonymous">
        <!--ICON PAGINA-->
        <link rel = "shortcut icon" type = "imagem/x-icon" href = " ../img/logo.ico"/>
        <!--FONTE GOOGLE USADA-->
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Archivo&display=swap" rel="stylesheet">
    </head>

    <body>
        <header class=cabecalho>
            <div class="btn">
                  <span class="fas fa-bars fa-2x"></span>
            </div>
            <div class="btns">
                <button id="resetar" class="btn-reset margin-zero">DESFAZER</button>
                <a href="../html/home-visitante.php"><button  class="btn-reset">VOLTAR</button></a>
            </div>

            <nav class="legenda">
                <div id="mySidebar" class="sidebar">
                    <ul class="items-legenda">
                        <li >
                        <button class="dropdown-btn margin-top">BLOCO ADMIN <i class="fa fa-chevron-circle-down" aria-hidden="true"></i></button>
                        <ul class="dropdown-container">
                            <li><button class="rota" id="btn-anexo">Anexo</button></li>
                            <li><button class="rota" id="btn-refeitorio">Refeitório</button></li>
                            <li><button class="rota" id="btn-miniauditorio">Miniauditório</button></li>
                            <li><button class="rota" id="btn-secretaria">Secretaria</button></li>
                            <li><button class="rota" id="btn-banheiro_patio_fem">Banheiro Pátio Fem</button></li>
                            <li><button class="rota" id="btn-banheiro_patio_masc">Banheiro Pátio Masc</button></li>
                            <li><button class="rota" id="btn-biblioteca">Biblioteca</button></li>
                            <li><button class="rota margin-bottom" id="btn-enfermaria">Enfermaria</button></li>
                        </ul>
                    </li>
                    <li>
                        <button class="dropdown-btn">BLOCO A <i class="fa fa-chevron-circle-down" aria-hidden="true"></i></button>
                        <ul class="dropdown-container">
                            <li><button class="rota" id="btn-sala1">Sala 1</button></li>
                            <li><button class="rota" id="btn-sala2">Sala 2</button></li>
                            <li><button class="rota" id="btn-sala3">Sala 3</button></li>
                            <li><button class="rota" id="btn-sala4">Sala 4</button></li>
                            <li><button class="rota" id="btn-sala5">Sala 5</button></li>
                            <li><button class="rota" id="btn-sala6">Sala 6</button></li>
                            <li><button class="rota" id="btn-sala7">Sala 7</button></li>
                            <li><button class="rota" id="btn-sala8">Sala 8</button></li>
                            <li><button class="rota" id="btn-banheiros_masc_A">Banheiros Masc.</button></li>
                            <li><button class="rota margin-bottom" id="btn-banheiros_fem_A">Banheiros Fem.</button></li>
                        </ul>
                    </li>
                    <li>
                        <button class="dropdown-btn">BLOCO B <i class="fa fa-chevron-circle-down" aria-hidden="true"></i></button>
                        <ul class="dropdown-container">
                            <li><button class="rota" id="btn-sala9">Sala 9</button></li>
                            <li><button class="rota" id="btn-sala10">Sala 10</button></li>
                            <li><button class="rota" id="btn-sala11">Sala 11</button></li>
                            <li><button class="rota" id="btn-sala12">Sala 12</button></li>
                            <li><button class="rota" id="btn-sala13">Sala 13</button></li>
                            <li><button class="rota" id="btn-sala14">Sala 14</button></li>
                            <li><button class="rota" id="btn-sala15">Sala 15</button></li>
                            <li><button class="rota" id="btn-sala16">Sala 16</button></li>
                            <li><button class="rota" id="btn-banheiros_masc_B">Banheiros Masc.</button></li>
                            <li><button class="rota margin-bottom" id="btn-banheiros_fem_B">Banheiros Fem.</button></li>
                        </ul>
                    </li>
                    <li>
                        <button class="dropdown-btn">BLOCO C <i class="fa fa-chevron-circle-down" aria-hidden="true"></i></button>
                        <ul class="dropdown-container">
                            <li><button class="rota" id="btn-labquimica">Lab. de Química</button></li>
                            <li><button class="rota margin-bottom" id="btn-labfisica">Lab. de Física</button></li>
                        </ul>
                    </li>
                    <li>
                        <button class="dropdown-btn">OUTROS <i class="fa fa-chevron-circle-down" aria-hidden="true"></i></button>
                        <ul class="dropdown-container">
                            <li><button class="rota" id="btn-portaria">Portaria</button></li>
                            <li><button class="rota" id="btn-auditorio">Auditório</button></li>
                            <li><button class="rota" id="btn-cantina">Cantina</button></li>
                            <li><button class="rota" id="btn-quadra_coberta">Quadra Coberta</button></li>
                            <li><button class="rota margin-bottom" id="btn-quadra_descoberta">Quadra Descoberta</button></li>
                        </ul>
                    </li>
                        
            </nav>
        </header>

        <div class="mapa">
            <!-- Mapa -->
            <img id="mapa" src="../img/Mapeamento/Mapa.png">

        </div>
        

        <!-- jQuery, Popper.js, Bootstrap JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="../js/script.js"></script>
    </body>
</html>
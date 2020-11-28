<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Home Visitante</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--CSS-->
        <link rel="stylesheet" href="../css/pag.css">
        <!--ICONES BOOTSTRAP-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity = "sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin = "anonymous">
        <!--ICON PAGINA-->
        <link rel = "shortcut icon" type = "imagem/x-icon" href = "../img/logo.ico"/>
        <!--FONTE GOOGLE USADA TITULO-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
        <!-- FONTE CORPO DO SITE -->
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Archivo&display=swap" rel="stylesheet">
        <!--IMPORTANDO JQUERY-->
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    </head>

    <body>
        
        <div class="tudo"> <!-- div que fará colunas  -->
            
            <!-- header  -->
            <header class="header">
                <a href="home-visitante.php" class="logo"><img src="../img/logonome.png"></a>
                <div class="btn">
                  <span class="fas fa-bars"></span>
                </div>
                <!-- navegação  -->
                <nav class="sidebar">
                  <div id="mySidebar" class="sidebar">
                    <ul>
                      <li class="margin-top margin-bottom"><a href="home-visitante.php">Home</a></li>
                      <li>
                        <button class="dropdown-btn margin-bottom">Cronogramas
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <ul class="dropdown-container">
                          <li><a href="../php/CronoEventos.php" class="margin-bottom">TCCs</a></li>
                          <li><a href="../php/cronoReuniao.php" class="margin-bottom">Reuniões de pais</a></li> 
                        </ul>
                      </li>
                      <li class="margin-top margin-bottom"><a href="../php/logout.php">Sair</a></li>
                    </ul>
                  </div>
                </nav>
            </header>  
       
        <!-- conteudo do site -->
        <main class="conteudo todas-colunas">
            <!-- banner  -->
            <div class="banner todas-colunas">
                <span>Quer conseguir se localizar com precisão dentro da Etec da Zona Leste?</span>
               <br>
                <a href="#sobre">SAIBA MAIS</a>
            </div>

            <!-- sobre nós  -->
            <div class="sobre  todas-colunas">
                <h1 class="titulo">SOBRE O PROJETO VIRTUAL INCREASED PLAN</h1>
                <hr>
                <p>Somos uma plataforma web que visa ajudar todas as pessoas da instituição Etec da Zona Leste a se situarem e transitarem sem dificuldades na escola através de um mapa virtual </p>
                <p>Nosso objetivo é fazer com que os alunos, funcionarios e visitantes chegem ao seu destido dentro da instituição com mais facilidade na comodidade de seu dispositivo</p>
                <p>Além disso, nosso projeto acrescentará alguns módulos para facilitar ainda mais a estadia de todos dentro da escola. Com isso apresentaremos também:</p>
                <ul>
                    <li><i class="fa fa-check-circle" aria-hidden="true" "></i> Cronogramas de Reuniões</li>
                    <li><i class="fa fa-check-circle "></i>  Cronogramas de TCCs</li>
                </ul>
            </div>

           <!-- div que fará nova divisão  -->
            <div id="sobre" class="todas-colunas">
                <!-- serviços  -->
                <div class="servicos todas-colunas">
                    <h1 class="titulo2 todas-colunas">NOSSOS SERVIÇOS</h1>
                    <hr class="todas-colunas">
                    <div class="mapeamento">
                        <i class="fa fa-map fa-3x cor" aria-hidden="true"></i>
                        <h2>MAPEAMENTO</h2>
                        <p>Vamos mapear o ambiente da Etec da Zona Leste para você.</p>
                    </div>
                    <div class="cronogramas">
                        <i class="fa fa-calendar-check-o  fa-3x cor" aria-hidden="true"></i>
                        <h2>CRONOGRAMAS</h2>
                        <p>Você terá acesso a cronogramas de Reuniões e TCCs para ficar ligado nas novidades da escola.</p>
                    </div>
                    <div class="horario-aula">
                        <i class="fa fa-graduation-cap fa-3x cor" aria-hidden="true"></i>
                        <h2>HORÁRIOS DE AULA</h2>
                        <p>Ao clicar em uma sala no mapa, você terá acesso ao horário de aula em tempo real daquele ambiente.</p>
                    </div>
                </div>

                <!-- acesso ao mapa  -->
                <div class="atalhos todas-colunas">
                    <div class="mapa">
                        <img src="../img/slide2.png" class="borda">
                        <p>mapeamento</p>
                        <a href="../php/mapa_visitante.php"><button><i class="fa fa-arrow-right" aria-hidden="true"></i> </button></a>
                    </div>
                    
                    <!-- acesso ao cronograma reuniao  -->
                    <div class="reuniao">
                        <!-- IMAGEM QUALQUER PRA FAZER O CSS -->
                        <img src="../img/slide2.png" class="borda">
                        <p>cronograma de Reuniões</p>
                        <a href="../php/cronoReuniao.php"><button><i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
                    </div>
                    
                    <!-- acesso ao cronograma tcc -->
                    <div class="tcc">
                        <!-- IMAGEM QUALQUER PRA FAZER O CSS -->
                        <img src="../img/slide2.png" class="borda">
                        <p>cronograma de TCCs</p>
                        <a href="../php/CronoEventos.php"><button><i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
                    </div>
                </div>
            </div>
        </main>

        <!-- linhas do rodape  -->
        <hr class="todas-colunas">
        <!-- rodape  -->
        <footer class="footer  todas-colunas">
            <p><a href="home-visitante.php">Virtual Increased Plan</a> © Todos os direitos reservados - 2020</p>
        </footer>
    </div>
    
    <!--SCRIPT PARA NAVBAR COLLAPSE-->
    <script>
        $('.btn').click(function(){
          $(this).toggleClass("click");
          $('.sidebar').toggleClass("show");
        });
        
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) 
        {
          dropdown[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
          } 
          else 
          {
          dropdownContent.style.display = "block";
          }
          });
        }
    </script>
    
    </body>
</html>
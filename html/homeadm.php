<?php
	include_once "../php/session_adm.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <title>Administrador</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--CSS-->
      <link rel="stylesheet" href="../css/pagadm.css">
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
    
    <div class="tudo"><!-- DIV QUE FARÁ AS COLUNAS -->
      <!-- HEADER -->
      <header class="header todas-colunas">
          <a href="homeadm.php" class="logo"><img src="../img/logonome.png"></a>
          <div class="btn">
            <span class="fas fa-bars fa-lg"></span>
          </div>
          <!-- NAVEGAÇÃO  -->
          <nav class="sidebar">
            <div id="mySidebar" class="sidebar">
              <ul>
                <li class="margin-top margin-bottom"><a href="home.php">Home</a></li>
                <li>
                  <button class="dropdown-btn margin-bottom ">Monitorar
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <ul class="dropdown-container ">
                    <li><a href="#tcc" class="margin-bottom">TCCs</a></li>
                    <li><a href="#reuniao" class="margin-bottom">Reuniões</a></li> 
                    <li><a href="#horario" class="margin-bottom">Horários</a></li> 
                  </ul>
                </li>
                <li>
                  <button class="dropdown-btn margin-bottom">Listar
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
      
      <!-- CONTEUDO  -->
      <main class="adm-conteudo">
        <!-- banner  -->
  
        <div class="banner-adm">
          <div class="banner-tcc">
            <p>Rotinas Tccs</p>
            <a href="#tcc">MONITORAR</a>
          </div>
          <div class="banner-reuniao">
            <p>Rotinas Reuniões</p>
            <a href="#reuniao">MONITORAR</a>
          </div>
          <div class="banner-horario">
            <p>Rotinas Horários</p>
            <a href="#horario">MONITORAR</a>
          </div>
        </div>
      
        
        <!-- ROTINAS TCC -->
        <div id="tcc" class="rotinas">
          <div class="rotina-tcc">
            <h1 class="todas-colunas">MONITORAR TCC</h1>
            <hr class="todas-colunas">

            <div class="lupa">
              <div class="org-lupa">
                <br>
                <i class="fa fa-search fa-6x" aria-hidden="true"></i> 
              </div>
              <div class="pesq">
                <a href="../rotinas/tcc/PesqTcc_pesq.php"><button><i class="fa fa-arrow-right" aria-hidden="true"></i></button></button></a>
              </div>
            </div>

            <div class="mais">
              <div class="org-mais">
                <br>
                <i class="fa fa-plus fa-6x" aria-hidden="true"></i>
              </div>
              <div class="inc">
                <a href="../rotinas/tcc/CadTcc_mostra.php"><button><i class="fa fa-arrow-right" aria-hidden="true"></i></button></button></a>
              </div>
            </div>

            <div class="pencil">
              <div class="org-pencil">
                <br>
                <i class="fa fa-pencil-square-o fa-6x" aria-hidden="true"></i>
              </div>
              <div class="alt">
                <a href="../rotinas/tcc/AltTcc.php"><button><i class="fa fa-arrow-right" aria-hidden="true"></i></button></button></a>
              </div>
            </div>

            <div class="borracha">
              <div class="org-borracha">
                <br>
                <i class="fa fa-trash fa-6x" aria-hidden="true"></i>
              </div>
              <div class="exc">
                <a href="../rotinas/tcc/exclTcc_mostra.php"><button><i class="fa fa-arrow-right" aria-hidden="true"></i></button></button></a>
              </div>

            </div>
          </div>
        </div>

        <!-- ROTINAS REUNIÕES -->
        <div id="reuniao" class="rotinas">
          <div class="rotina-reuniao">
            <h1 class="todas-colunas">MONITORAR REUNIÕES</h1>
            <hr class="todas-colunas">
            <div class="lupa">
              <div class="org-lupa">
                <br>
                <i class="fa fa-search fa-6x" aria-hidden="true"></i> 
              </div>
              <div class="pesq">
                <a href="../rotinas/reunioes/PesqReuniao_pesq.php"><button><i class="fa fa-arrow-right" aria-hidden="true"></i></button></button></a>
              </div>
            </div>
            <div class="mais">
              <div class="org-mais">
                <br>
                <i class="fa fa-plus fa-6x" aria-hidden="true"></i>
              </div>
              <div class="inc">
                <a href="../rotinas/reunioes/CadReuniao_mostra.php"><button><i class="fa fa-arrow-right" aria-hidden="true"></i></button></button></a>
              </div>
            </div>
            <div class="pencil">
              <div class="org-pencil">
                <br>
                <i class="fa fa-pencil-square-o fa-6x" aria-hidden="true"></i>
              </div>
              <div class="alt">
                <a href="../rotinas/reunioes/AltReuniao.php"><button><i class="fa fa-arrow-right" aria-hidden="true"></i></button></button></a>
              </div>
            </div>
            <div class="borracha">
              <div class="org-borracha">
                <br>
                <i class="fa fa-trash fa-6x" aria-hidden="true"></i>
              </div>
              <div class="exc">
                <a href="../rotinas/reunioes/ExclReuniao_mostra.php"><button><i class="fa fa-arrow-right" aria-hidden="true"></i></button></button></a>
              </div>
            </div>
          </div>
        </div>

        <!-- ROTINAS HORÁRIOS -->
        <div id="horario" class="rotinas">
          <div class="rotina-horario">
            <h1 class="todas-colunas">MONITORAR HORÁRIOS</h1>
            <hr class="todas-colunas">
            <div class="lupa">
              <div class="org-lupa">
                <br>
                <i class="fa fa-search fa-6x" aria-hidden="true"></i> 
              </div>
              <div class="pesq">
                <a href="../rotinas/horarios/PesqHorarios_pesq.php"><button><i class="fa fa-arrow-right" aria-hidden="true"></i></button></button></a>
              </div>
            </div>
            <div class="mais">
              <div class="org-mais">
                <br>
                <i class="fa fa-plus fa-6x" aria-hidden="true"></i>
              </div>
              <div class="inc">
                <a href="../rotinas/horarios/cadHorarios_mostra.php"><button><i class="fa fa-arrow-right" aria-hidden="true"></i></button></button></a>
              </div>
            </div>
            <div class="pencil">
              <div class="org-pencil">
                <br>
                <i class="fa fa-pencil-square-o fa-6x" aria-hidden="true"></i> 
              </div>
              <div class="alt">
                <a href="../rotinas/horarios/altHorarios.php"><button><i class="fa fa-arrow-right" aria-hidden="true"></i></button></button></a>
              </div>
            </div>
            <div class="borracha">
              <div class="org-borracha">
                <br>
                <i class="fa fa-trash fa-6x" aria-hidden="true"></i>
              </div>
              <div class="exc">
                <a href="../rotinas/horarios/exclHorarios_mostra.php"><button><i class="fa fa-arrow-right" aria-hidden="true"></i></button></button></a>
              </div>
            </div>
          </div>
        </div>

        <div class="crono">
          <h1 class="todas-colunas">listagem dos cronogramas</h1>
          <hr class="todas-colunas">
  
          <div class="crono-tcc">
            <img src="../img/tcc.png">
            <a href="../php/CronoEventos.php"><button>Listar</button></a>
          </div>
          <div class="crono-reuniao">
            <img src="../img/reuniao.png">
            <a href="../php/cronoReuniao.php"><button>Listar</button></a>
          </div>
        </div>

        <div class="home">
          <img src="../img/home.png">
          <button id="btn-href-home">Home <i class="fa fa-arrow-right" aria-hidden="true"></i> </button>
        </div>
        <hr>
      </main>
       
  
      <footer class="footer">
        <p><a href="homeadm.php">Virtual Increased Plan</a> © Todos os direitos reservados - 2020</p>
      </footer>
    </div> 

  <!--SCRIPT PARA NAVBAR COLLAPSE-->
	<script src="../js/script.js"></script>
  </body>
</html>
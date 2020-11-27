<!DOCTYPE html>
<html>
    <head>
        <title>Mapa Completo</title>
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
                <a href="#"><button class="btn-reset margin-zero">RESETAR</button></a>
                <a href="#"><button  class="btn-reset">SAIR</button></a>
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
                                <li><button class="rota margin-bottom" id="btn-sala8">Sala 8</button></li>
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
                                <li><button class="rota margin-bottom" id="btn-sala16">Sala 16</button></li>
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
                    </ul>
                </div>   
            </nav>
        </header>

        <div class="mapa">
            <!-- Mapa -->
            <img id="mapa" src="../img/Mapeamento/Mapa.png" usemap="#image-map">

            <!-- Links inseridos no mapa -->
            <map name="image-map">

                <!-- Sala 1 -->
                <area href="#" id="sala1" class="view_data" alt="sala1" title="Sala 1" coords="139,724,199,690" shape="rect">

                <!-- Sala 2 -->
                <area href="#" id="sala2" class="view_data" alt="sala2" title="Sala 2" coords="139,671,199,637" shape="rect">
                
                <!-- Sala 3 -->
                <area href="#" id="sala3" class="view_data" alt="sala3" title="Sala 3" coords="337,723,380,690" shape="rect">

                <!-- Sala 4 -->
                <area href="#" id="sala4" class="view_data" alt="sala4" title="Sala 4" coords="380,639,337,672" shape="rect">

                <!-- Sala 5 -->
                <area href="#" id="sala5" class="view_data" alt="sala5" title="Sala 5" coords="383,732,425,700" shape="rect">

                <!-- Sala 6 -->
                <area href="#" id="sala6" class="view_data" alt="sala6" title="Sala 6" coords="425,630,383,662" shape="rect">

                <!-- Sala 7 -->
                <area href="#" id="sala7" class="view_data" alt="sala7" title="Sala 7" coords="487,724,428,691" shape="rect">

                <!-- Sala 8 -->
                <area href="#" id="sala8" class="view_data" alt="sala8" title="Sala 8" coords="428,638,487,671" shape="rect">

                <!-- Sala 9 -->
                <area href="#" id="sala9" class="view_data" alt="sala9" title="Sala 9" coords="139,967,199,1001" shape="rect">

                <!-- Sala 10 -->
                <area href="#" id="sala10" class="view_data" alt="sala10" title="Sala 10" coords="139,948,199,914" shape="rect">

                <!-- Sala 11 -->
                <area href="#" id="sala11" class="view_data" alt="sala11" title="Sala 11" coords="337,967,380,1000" shape="rect">

                <!-- Sala 12 -->
                <area href="#" id="sala12" class="view_data" alt="sala12" title="Sala 12" coords="337,949,380,916" shape="rect">

                <!-- Sala 13 -->
                <area href="#" id="sala13" class="view_data" alt="sala13" title="Sala 13" coords="383,1009,425,977" shape="rect">

                <!-- Sala 14 -->
                <area href="#" id="sala14" class="view_data" alt="sala14" title="Sala 14" coords="425,907,383,939" shape="rect">

                <!-- Sala 15 -->
                <area href="#" id="sala15" class="view_data" alt="sala15" title="Sala 15" coords="428,968,487,1001" shape="rect">

                <!-- Sala 16 -->
                <area href="#" id="sala16" class="view_data" alt="sala16" title="Sala 16" coords="487,915,428,948" shape="rect">
            </map> 
        </div>

        
        <!-- Modal -->
        <div class="modal fade" id="modalAcontecimentos" tabindex="1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">O que está ocorrendo?</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>x</span>
                        </button>
                    </div>

                    <div id="conteudo" class="modal-body">
                    </div>
                        
                    <div class="modal-footer">
                        <button type="button" class="btn-danger" data-dismiss="modal">
                            Pronto
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
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

        <!-- jQuery, Popper.js, Bootstrap JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="../js/script.js"></script>
    </body>
</html>
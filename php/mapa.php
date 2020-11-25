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
        <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
    </head>

    <body>
          
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

        <button class="rota" id="btn-sala1">Sala 1</button>
        <button class="rota" id="btn-sala2">Sala 2</button>
        <button class="rota" id="btn-sala3">Sala 3</button>
        <button class="rota" id="btn-sala4">Sala 4</button>
        <button class="rota" id="btn-sala5">Sala 5</button>
        <button class="rota" id="btn-sala6">Sala 6</button>
        <button class="rota" id="btn-sala7">Sala 7</button>
        <button class="rota" id="btn-sala8">Sala 8</button>
        <button class="rota" id="btn-sala9">Sala 9</button>
        <button class="rota" id="btn-sala10">Sala 10</button>
        <button class="rota" id="btn-sala11">Sala 11</button>
        <button class="rota" id="btn-sala12">Sala 12</button>
        <button class="rota" id="btn-sala13">Sala 13</button>
        <button class="rota" id="btn-sala14">Sala 14</button>
        <button class="rota" id="btn-sala15">Sala 15</button>
        <button class="rota" id="btn-sala16">Sala 16</button>
        <button class="rota" id="btn-auditorio">Auditório</button>
        <button class="rota" id="btn-refeitorio">Refeitório</button>
        <button class="rota" id="btn-miniauditorio">Miniauditório</button>
        <button class="rota" id="btn-secretaria">Secretaria</button>
        <button class="rota" id="btn-banheiro_patio_fem">Banheiro Patio Fem</button>
        <button class="rota" id="btn-banheiro_patio_masc">Banheiro Patio Masc</button>
        <button class="rota" id="btn-biblioteca">Biblioteca</button>
        <button class="rota" id="btn-enfermaria">Enfermaria</button>
        <button class="rota" id="btn-cantina">Cantina</button>
        <button class="rota" id="btn-portaria">Portaria</button>
        <button class="rota" id="btn-anexo">Anexo</button>
        <button class="rota" id="btn-quadra_coberta">Quadra Coberta</button>
        <button class="rota" id="btn-quadra_descoberta">Quadra Descoberta</button>
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
                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                            Pronto
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery, Popper.js, Bootstrap JS -->
        
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="../js/script.js"></script>
    </body>
</html>
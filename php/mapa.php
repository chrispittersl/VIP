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
        <link rel = "shortcut icon" type = "imagem/x-icon" href = "../../img/logo.ico"/>
        <!--FONTE GOOGLE USADA-->
        <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
    </head>

    <body>
        <!-- Mapa -->
        <img src="../img/Mapeamento/Mapa.png" usemap="#image-map">

        <!-- Links inseridos no mapa -->
        <map name="image-map">

            <!-- Sala 1 -->
            <area href="#" id="sala1" class="view_data" alt="sala1" title="Sala 1" coords="697,468,731,528" shape="rect">

            <!-- Sala 2 -->
            <area href="#" id="sala2" class="view_data" alt="sala2" title="Sala 2" coords="677,469,643,528" shape="rect">
            
            <!-- Sala 3 -->
            <area href="#" id="sala3" class="view_data" alt="sala3" title="Sala 3" coords="697,289,729,330" shape="rect">

            <!-- Sala 4 -->
            <area href="#" id="sala4" class="view_data" alt="sala4" title="Sala 4" coords="679,288,644,330" shape="rect">

            <!-- Sala 5 -->
            <area href="#" id="sala5" class="view_data" alt="sala5" title="Sala 5" coords="706,243,739,285" shape="rect">

            <!-- Sala 6 -->
            <area href="#" id="sala6" class="view_data" alt="sala6" title="Sala 6" coords="636,243,669,285" shape="rect">

            <!-- Sala 7 -->
            <area href="#" id="sala7" class="view_data" alt="sala7" title="Sala 7" coords="697,181,731,239" shape="rect">

            <!-- Sala 8 -->
            <area href="#" id="sala8" class="view_data" alt="sala8" title="Sala 8" coords="644,181,677,241" shape="rect">

            <!-- Sala 9 -->
            <area href="#" id="sala9" class="view_data" alt="sala9" title="Sala 9" coords="972,468,1008,528" shape="rect">

            <!-- Sala 10 -->
            <area href="#" id="sala10" class="view_data" alt="sala10" title="Sala 10" coords="955,469,920,528" shape="rect">

            <!-- Sala 11 -->
            <area href="#" id="sala11" class="view_data" alt="sala11" title="Sala 11" coords="971,288,1007,332" shape="rect">

            <!-- Sala 12 -->
            <area href="#" id="sala12" class="view_data" alt="sala12" title="Sala 12" coords="956,288,921,330" shape="rect">

            <!-- Sala 13 -->
            <area href="#" id="sala13" class="view_data" alt="sala13" title="Sala 13" coords="1016,243,983,285" shape="rect">

            <!-- Sala 14 -->
            <area href="#" id="sala14" class="view_data" alt="sala14" title="Sala 14" coords="913,243,947,285" shape="rect">

            <!-- Sala 15 -->
            <area href="#" id="sala15" class="view_data" alt="sala15" title="Sala 15" coords="974,181,1008,241" shape="rect">

            <!-- Sala 16 -->
            <area href="#" id="sala16" class="view_data" alt="sala16" title="Sala 16" coords="920,181,954,241" shape="rect">

        </map>

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
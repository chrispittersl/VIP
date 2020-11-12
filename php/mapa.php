<!DOCTYPE html>
<html>
    <head>
        <title>Mapa Completo</title>
        <meta charset="utf-8">
        <!--CSS-->
		<link rel="stylesheet" href="../css/mapa.css">
        <!-- Bootstrap 4 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
            <area href="#" id="toggle_sala1" data-toggle="modal" data-target="#modalAcontecimentos" alt="Sala1" title="Sala1" coords="697,289,729,330" shape="rect">

            <!-- Sala 2 -->
            <area href="#" id="toggle_sala2" data-toggle="modal" data-target="#modalAcontecimentos" alt="Sala2" title="Sala2" coords="706,243,739,285" shape="rect">

            <!-- Sala 3 -->
            <area href="#" id="toggle_sala3" data-toggle="modal" data-target="#modalAcontecimentos" alt="Sala3" title="Sala3" coords="697,181,731,239" shape="rect">

            <!-- Sala 4 -->
            <area href="#" id="toggle_sala4" data-toggle="modal" data-target="#modalAcontecimentos" alt="Sala4" title="Sala4" coords="644,181,677,241" shape="rect">

            <!-- Sala 5 -->
            <area href="#" id="toggle_sala5" data-toggle="modal" data-target="#modalAcontecimentos" alt="Sala5" title="Sala5" coords="636,243,669,285" shape="rect">

            <!-- Sala 6 -->
            <area href="#" id="toggle_sala6" data-toggle="modal" data-target="#modalAcontecimentos" alt="Sala6" title="Sala6" coords="679,288,644,330" shape="rect">

            <!-- Sala 7 -->
            <area href="#" id="toggle_sala7" data-toggle="modal" data-target="#modalAcontecimentos" alt="Sala7" title="Sala7" coords="697,468,731,528" shape="rect">

            <!-- Sala 8 -->
            <area href="#" id="toggle_sala8" data-toggle="modal" data-target="#modalAcontecimentos" alt="Sala8" title="Sala8" coords="677,469,643,528" shape="rect">

            <!-- Sala 9 -->
            <area href="#" id="toggle_sala9" data-toggle="modal" data-target="#modalAcontecimentos" alt="Sala9" title="Sala9" coords="971,288,1007,332" shape="rect">

            <!-- Sala 10 -->
            <area href="#" id="toggle_sala10" data-toggle="modal" data-target="#modalAcontecimentos" alt="Sala10" title="Sala10" coords="1016,243,983,285" shape="rect">

            <!-- Sala 11 -->
            <area href="#" id="toggle_sala11" data-toggle="modal" data-target="#modalAcontecimentos" alt="Sala11" title="Sala11" coords="974,181,1008,241" shape="rect">

            <!-- Sala 12 -->
            <area href="#" id="toggle_sala12" data-toggle="modal" data-target="#modalAcontecimentos" alt="Sala12" title="Sala12" coords="920,181,954,241" shape="rect">

            <!-- Sala 13 -->
            <area href="#" id="toggle_sala13" data-toggle="modal" data-target="#modalAcontecimentos" alt="Sala13" title="Sala13" coords="913,243,947,285" shape="rect">

            <!-- Sala 14 -->
            <area href="#" id="toggle_sala14" data-toggle="modal" data-target="#modalAcontecimentos" alt="Sala14" title="Sala14" coords="956,288,921,330" shape="rect">

            <!-- Sala 15 -->
            <area href="#" id="toggle_sala15" data-toggle="modal" data-target="#modalAcontecimentos" alt="Sala15" title="Sala15" coords="972,468,1008,528" shape="rect">

            <!-- Sala 16 -->
            <area href="#" id="toggle_sala16" data-toggle="modal" data-target="#modalAcontecimentos" alt="Sala16" title="Sala16" coords="955,469,920,528" shape="rect">

        </map>

        <!-- Modal -->
        <div class="modal fade" id="modalAcontecimentos" tabindex="1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">O que está acontecendo</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>x</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <p>
                        Lista de acontecimentos
                        </p>
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
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
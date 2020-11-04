<!DOCTYPE html>
<html>
    <head>
        <title>Mapa Completo</title>
        <meta charset="utf-8">
        <!--CSS-->
		<link rel="stylesheet" href="../css/mapa.css">
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
            <area class="" target="" alt="Sala1" title="Sala1" href="" coords="697,289,729,330" shape="rect">

            <!-- Sala 2 -->
            <area class="" target="" alt="Sala2" title="Sala2" href="" coords="706,243,739,285" shape="rect">

            <!-- Sala 3 -->
            <area class="" target="" alt="Sala3" title="Sala3" href="" coords="697,181,731,239" shape="rect">

            <!-- Sala 4 -->
            <area class="" target="" alt="Sala4" title="Sala4" href="" coords="644,181,677,241" shape="rect">

            <!-- Sala 5 -->
            <area class="" target="" alt="Sala5" title="Sala5" href="" coords="636,243,669,285" shape="rect">

            <!-- Sala 6 -->
            <area class="" target="" alt="Sala6" title="Sala6" href="" coords="679,288,644,330" shape="rect">

            <!-- Sala 7 -->
            <area class="" target="" alt="Sala7" title="Sala7" href="" coords="697,468,731,528" shape="rect">

            <!-- Sala 8 -->
            <area class="" target="" alt="Sala8" title="Sala8" href="" coords="677,469,643,528" shape="rect">

            <!-- Sala 9 -->
            <area class="" target="" alt="Sala9" title="Sala9" href="" coords="971,288,1007,332" shape="rect">

            <!-- Sala 10 -->
            <area class="" target="" alt="Sala10" title="Sala10" href="" coords="1016,243,983,285" shape="rect">

            <!-- Sala 11 -->
            <area class="" target="" alt="Sala11" title="Sala11" href="" coords="974,181,1008,241" shape="rect">

            <!-- Sala 12 -->
            <area class="" target="" alt="Sala12" title="Sala12" href="" coords="920,181,954,241" shape="rect">

            <!-- Sala 13 -->
            <area class="" target="" alt="Sala13" title="Sala13" href="" coords="913,243,947,285" shape="rect">

            <!-- Sala 14 -->
            <area class="" target="" alt="Sala14" title="Sala14" href="" coords="956,288,921,330" shape="rect">

            <!-- Sala 15 -->
            <area class="" target="" alt="Sala15" title="Sala15" href="" coords="972,468,1008,528" shape="rect">

            <!-- Sala 16 -->
            <area class="" target="" alt="Sala16" title="Sala16" href="" coords="955,469,920,528" shape="rect">

        </map>
        <div id="container">

            <button id="toggleB_A">Bloco A</button>
            <button id="toggleB_B">Bloco B</button>
            <button id="toggleB_C">Bloco C</button>
            <button id="toggleB_ADM">Bloco ADM</button>
            <button id="toggleExternos">Externos</button>
            
            <div class="wrapper">
            
                <div id="conteudo">

                    <ul class="item" id="emp1">

                        <li class="blocoA" style="display:none;"> Sala 1 </li>
                        <li class="blocoA" style="display:none;"> Sala 2</li>
                        <li class="blocoA" style="display:none;"> Sala 3 </li>
                        <li class="blocoA" style="display:none;"> Sala 4</li>
                        <li class="blocoA" style="display:none;"> Sala 5 </li>
                        <li class="blocoA" style="display:none;"> Sala 6 </li>
                        <li class="blocoA" style="display:none;"> Sala 7 </li>
                        <li class="blocoA" style="display:none;"> Sala 8 </li>
                        <li class="blocoA" style="display:none;"> Banheiros Femininos </li>
                        <li class="blocoA" style="display:none;"> Banheiros Masculinos </li>

                    </ul>

                    <ul class="item" id="emp2">

                        <li class="blocoB" style="display:none;"> Sala 9 </li>
                        <li class="blocoB" style="display:none;"> Sala 10</li>
                        <li class="blocoB" style="display:none;"> Sala 11 </li>
                        <li class="blocoB" style="display:none;"> Sala 12</li>
                        <li class="blocoB" style="display:none;"> Sala 13 </li>
                        <li class="blocoB" style="display:none;"> Sala 14 </li>
                        <li class="blocoB" style="display:none;"> Sala 15 </li>
                        <li class="blocoB" style="display:none;"> Sala 16 </li>
                        <li class="blocoB" style="display:none;"> Banheiros Femininos </li>
                        <li class="blocoB" style="display:none;"> Banheiros Masculinos </li>

                    </ul>

                </div>

            </div>
            
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
        <script type="text/javascript" src="../js/mapa.js"></script>
    </body>
</html>
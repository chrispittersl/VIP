<!DOCTYPE html>
<html>
    <head>
        <title>Cronograma de TCCs</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--CSS-->
        <link rel="stylesheet" href="../css/pag.css">
        <link rel="stylesheet" href="../css/cronogramas.css">
        <!--ICONES BOOTSTRAP-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity = "sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin = "anonymous">
        <!--ICON PAGINA-->
        <link rel = "shortcut icon" type = "imagem/x-icon" href = "../img/logo.ico"/>
        <!--FONTE GOOGLE USADA-->
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&display=swap" rel="stylesheet">
        <!--IMPORTANDO JQUERY-->
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
       
    </head>

    <body>
    <header class="cabecalho">
          <a href="home.html"><h1 class="logo">Virtual Increased Plan</h1></a>
          <div class="btn">
            <span class="fas fa-bars"></span>
          </div>
          <nav class="sidebar">
            <div id="mySidebar" class="sidebar">
              <ul>
                <li class="margin"><a href="../html/homeadm.html">Home</a></li>
                <li>
                  <button class="dropdown-btn">Monitorar
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <ul class="dropdown-container">
                    <li><a href="../html/tcc.html">TCCs</a></li>
                    <li><a href="../html/reuniao.html">Reuniões</a></li> 
                    <li><a href="../html/horario.html">Horários</a></li> 
                  </ul>
                </li>
                <li>
                  <button class="dropdown-btn">Cronogramas
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <ul class="dropdown-container">
                    <li><a href="../php/ListarReuniao.php">Listar - Reuniões</a></li>
                    <li><a href="../php/ListarTCC.php">Listar - TCCs</a></li> 
                  </ul>
                </li>
            </div>
          </nav>
      </header> 
      
      <div class="cronograma">
        <div class="titulo">
          <h2>Cronograma de Reuniões</h2>
        </div>

        <table>
                <tr>
                    <th>Reunião</th>
                    <th>Descrição</th>
                    <th>Horário</th>
                    <th id="col-data">Data</th>
                </tr>
            
                <?php 
                
                    include 'config.php';
                    include 'mysqlexecuta.php';
                    $con = conectar();
                    mysql_select_db('vip');
                    $sql = "SELECT * FROM reunioes order by data_reuniao ASC";


                    $consulta = mysqlexecuta($con,$sql);

                    //if($rows > 0){ 
                        while($row = mysql_fetch_assoc($consulta))
                        {
                ?>
                                <tr>
                                    <td><?php echo utf8_encode($row['nome']);?></td>
                                    <td><?php echo utf8_encode($row['descricao']);?></td>
                                    <td><?php echo utf8_encode($row['horario_reuniao']);?></td>
                                    <td><?php echo utf8_encode($row['data_reuniao']);?></td>
                                    
                                    
                                </tr>
                <?php
                                
                        }
                ?>
        </table>
        <div class="fechando">
          <h3>.</h3>
       </div>
        <!--SCRIPT PARA NAVBAR COLLAPSE-->
      <script>
            $('.btn').click(function(){
              $(this).toggleClass("click");
              $('.sidebar').toggleClass("show");
            });
            
            var dropdown = document.getElementsByClassName("dropdown-btn");
            var i;

            for (i = 0; i < dropdown.length; i++) {
              dropdown[i].addEventListener("click", function() {
              this.classList.toggle("active");
              var dropdownContent = this.nextElementSibling;
              if (dropdownContent.style.display === "block") {
              dropdownContent.style.display = "none";
              } else {
              dropdownContent.style.display = "block";
              }
              });
            }
      </script>
    </body>
</html>
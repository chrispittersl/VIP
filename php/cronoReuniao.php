<!DOCTYPE html>
<html>
    <head>
        <title>Cronograma de TCCs</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--CSS-->
        <link rel="stylesheet" href="../rotinas/css/pesquisas.css">
        <!--ICONES BOOTSTRAP-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity = "sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin = "anonymous">
        <!--ICON PAGINA-->
        <link rel = "shortcut icon" type = "imagem/x-icon" href = "../img/logo.ico"/>
        <!--FONTE GOOGLE USADA-->
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
        <!-- FONTE CORPO DO SITE -->
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Archivo&display=swap" rel="stylesheet">
        <!--IMPORTANDO JQUERY-->
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
       
    </head>

    <body>
      <div class="cont-pesq">
        <table>
                <tr>
                    <th>Reunião</th>
                    <th>Descrição</th>
                    <th>Horário</th>
                    <th id="col-data">Data</th>
                </tr>
            
                <?php 
                
                    include_once "conexao.php";
                    $stmt = $pdo->prepare("SELECT * FROM reunioes order by data_reuniao ASC");
                    $stmt->execute();
                        while($row = $stmt->fetch(PDO::FETCH_ASSOC))
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
        <a href="#">VOLTAR</a>
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
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Virtual Increased Plan
        </title>
        <link rel="stylesheet" href="css/main.css"/>
    </head>
    <body>
        <header id="header">
            <div class="cabecalho">
                <a href="index.html" class="logo">Virtual Increased Plan</a>
                <nav id="navigation">
                    <a href="">Home</a>
                    <a href="">Cronogramas</a>
                    <a href="sobre.html">Sobre</a>
                    <a href="">Ajuda</a>
                </nav>
            </div>
        </header>
        
        <div id = "cronograma">

            <main>

                <h2>Cronograma de Eventos</h2>
                
                <table>
                    <thead>
                        <tr>
                            <td>Evento</td>
                            <td>Data</td>
                            <td>Horário</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            include 'config.php';
                            include 'mysqlexecuta.php'
                            $con = conectar();
                            mysql_select_db('bd_vip');
                            $sql = "SELECT * FROM TCC ORDER BY Data Desc";

                            $consulta = mysqlexecuta($con,$sql);

                            if($rows > 0){
                                while($row = mysql_fetch_assoc($consulta)){
                                    echo '
                                        <tr>
                                            <td>'.$row['Nome'].'</td>
                                            <td>'.$row['Data'].'</td>
                                            <td>'.$row['Horario_TCC'].'</td>
                                        </tr>'
                                            
                                }

                                $sql = "SELECT * FROM Reunioes ORDER BY Data Desc";
                                $consulta = mysqlexecuta($con,$sql);

                                while($row = mysql_fetch_assoc($consulta)){
                                    echo '
                                        <tr>
                                            <td>'.$row['Nome'].'</td>
                                            <td>'.$row['Data'].'</td>
                                            <td>'.$row['Horario'].'</td>
                                        </tr>
                                    '
                                }
                            }
                            else{
                                echo '
                                    <tr>
                                        <td>Cronogramas indisponível!</td>
                                    </tr>
                                '
                            }

                        ?>
                    </tbody>
                </table>
            <main>
        </div>
        
    </body>
</html>
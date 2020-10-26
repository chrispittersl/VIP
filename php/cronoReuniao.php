<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cronograma de TCCs</title>
        <style>
            table{
                border: 1px solid;
            }
        </style>
    </head>
    <body>
        <h1>Cronograma de Reuniões</h1>
        <table>
            <caption>Reuniões</caption>
            <thead>
                <tr>
                    <th>Reunião</th>
                    <th>Descrição</th>
                    <th>Horário</th>
                    <th>Data</th>
                    <th>Local</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                
                    include 'config.php';
                    include 'mysqlexecuta.php';
                    $con = conectar();
                    mysql_select_db('vip');
                    $sql = "SELECT R.nome, R.descricao, R.horario_reuniao, R.data_reuniao, S.local_sala FROM reunioes as R INNER JOIN sala AS S ON R.num_sala = S.num_sala order by data_reuniao ASC";


                    $consulta = mysqlexecuta($con,$sql);

                    //if($rows > 0){ 
                        while($row = mysql_fetch_assoc($consulta)){
                            echo '
                                <tr>
                                    <td>'.$row['nome'].'</td>
                                    <td>'.$row['descricao'].'</td>
                                    <td>'.$row['horario_reuniao'].'</td>
                                    <td>'.$row['data_reuniao'].'</td>
                                    <td>'.$row['local_sala'].'</td>
                                    
                                </tr>';
                                    
                        }
                    //}
                    /*else{
                        echo '
                            <tr>
                                <td>Cronogramas indisponível!</td>
                            </tr>
                        ';
                    }*/
                ?>
            </tbody>
        </table>
    </body>
</html>
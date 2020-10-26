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
        <h1>Cronograma de TCCs</h1>
        <table>
            <caption>Trabalhos de Conclusão de Curso</caption>
            <thead>
                <tr>
                    <th>TCC</th>
                    <th>Descrição</th>
                    <th>Horário</th>
                    <th>Data</th>
                    <th>local_sala</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                
                    include 'config.php';
                    include 'mysqlexecuta.php';
                    $con = conectar();
                    mysql_select_db('vip');
                    $sql = "SELECT T.nome, T.descricao, T.horario_tcc, T.data_tcc, S.local_sala FROM tcc AS T INNER JOIN sala AS S ON T.num_sala=S.num_sala order by data_tcc ASC";


                    $consulta = mysqlexecuta($con,$sql);

                    //if($rows > 0){ 
                        while($row = mysql_fetch_assoc($consulta)){
                            echo '
                                <tr>
                                    <td>'.$row['nome'].'</td>
                                    <td>'.$row['descricao'].'</td>
                                    <td>'.$row['horario_tcc'].'</td>
                                    <td>'.$row['data_tcc'].'</td>
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
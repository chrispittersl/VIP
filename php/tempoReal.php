<?php
    if(isset($_POST['sala'])){
        include_once "conexao.php";

        $sala = $_POST['sala'];

        /* Indetificando e formatando o valor da sala */

        if($sala == "sala1")
            $sala = "Sala 1 - Bloco A";
        else if($sala == "sala2")
            $sala = "Sala 2 - Bloco A";
        else if($sala == "sala3")
            $sala = "Sala 3 - Bloco A";
        else if($sala == "sala4")
            $sala = "Sala 4 - Bloco A";
        else if($sala == "sala5")
            $sala = "Sala 5 - Bloco A";
        else if($sala == "sala6")
            $sala = "Sala 6 - Bloco A";
        else if($sala == "sala7")
            $sala = "Sala 7 - Bloco A";
        else if($sala == "sala8")
            $sala = "Sala 8 - Bloco A";
        else if($sala == "sala9")
            $sala = "Sala 9 - Bloco B";
        else if($sala == "sala10")
            $sala = "Sala 10 - Bloco B";
        else if($sala == "sala11")
            $sala = "Sala 11 - Bloco B";
        else if($sala == "sala12")
            $sala = "Sala 12 - Bloco B";
        else if($sala == "sala13")
            $sala = "Sala 13 - Bloco B";
        else if($sala == "sala14")
            $sala = "Sala 14 - Bloco B";
        else if($sala == "sala15")
            $sala = "Sala 15 - Bloco B";
        else if($sala == "sala16")
            $sala = "Sala 16 - Bloco B";

        /* Indetificando e formatando o valor da sala */

        setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        $dia = ucfirst(strftime('%A'));
        $hora = ucfirst(strftime('%T'));

        $stmt = $pdo->prepare("SELECT horainicio,horafim,dia_da_semana,materia,professor,serie,nome_curso,tipo_curso,
        nome_sala FROM horario_aula AS H INNER JOIN turma  AS T ON H.cod_turma = T.cod_turma INNER JOIN curso AS 
        C ON T.cod_curso = C.cod_curso INNER JOIN sala AS S ON T.num_sala = S.num_sala WHERE nome_sala LIKE '$sala' AND '$hora'
        BETWEEN horainicio AND horafim AND dia_da_semana LIKE '$dia'");
        $stmt->execute();
        $dados = $stmt->fetch(PDO::FETCH_ASSOC);
        $num_rows = $stmt->rowCount();

        /************* Conteúdo do Modal Box ***************/
        if($num_rows != 0){
            $resultado = 
            "  <ul>
                <li>Matéria: ".$dados['materia']."</li>
                <li>Tipo do Curso: ".$dados['tipo_curso']."</li>
                <li>Curso: ".$dados['nome_curso']."</li>
                <li>Série: ".$dados['serie']."</li>
                <li>Horario de Início: ".$dados['horainicio']."</li>
                <li>Horario de Fim: ".$dados['horafim']."</span></li>
                <li>Professor: ".$dados['professor']."</span></li>
            </ul>";
        }
        else{
            $resultado = "Não há nenhum evento :/";
        }

        /************* Conteúdo do Modal Box ***************/
        echo $resultado;
    }
?>
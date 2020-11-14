<?php
    if(isset($_POST['sala'])){
        include_once "conexao.php";

        $sala = $_POST['sala'];

        setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        $dia = ucfirst(strftime('%A'),strtotime('today'));
        $hora = ucfirst(strftime('%T'),strtotime('today'));

        $stmt = $pdo->prepare("SELECT horainicio,horafim,dia_da_semana,materia,professor,serie,nome_curso,tipo_curso,nome_sala FROM
        horario_aula AS H INNER JOIN turma  AS T ON H.cod_turma = T.cod_turma INNER JOIN curso AS C ON T.cod_curso = C.cod_curso
        INNER JOIN sala AS S ON T.num_sala = S.num_sala WHERE ");
        $stmt->execute();
        $dados = $stmt->fetch(PDO::FETCH_ASSOC);

        echo $dados['materia'];
    }
?>
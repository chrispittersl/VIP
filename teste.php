<?php
    date_default_timezone_set("America/Sao_Paulo");
    setlocale(LC_ALL, 'pt_BR');
    setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    $dia = ucfirst(strftime('%A',strtotime("yesterday")));
    $hora = ucfirst(strftime('%T'));
    echo $dia;
    echo "<br>".$hora;
?>
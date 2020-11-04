<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Alteração de tcc</title>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--CSS-->
		<link rel="stylesheet" href="../../css/rotinas.css">
        <!--ICONES BOOTSTRAP-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity = "sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin = "anonymous">
        <!--ICON PAGINA-->
        <link rel = "shortcut icon" type = "imagem/x-icon" href = "../../img/logo.ico"/>
        <!--FONTE GOOGLE USADA-->
        <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
	</head>
    <body>
        <?php
            include 'config.php';
            include 'mysqlexecuta.php';
            $con = conectar();
            mysql_select_db('vip');
            $cod_horario= $_POST["cod_horario"];
            $cod_usuario= $_POST["cod_usuario"];
            $cod_turma= $_POST["cod_turma"];
            $horainicio= $_POST["horainicio"];
            $horafim= $_POST["horafim"];
            $diaSemana= $_POST["diaSemana"];
            $materia= $_POST["materia"];
            $professor= $_POST["professor"];
            $sql = "UPDATE horario_aula set cod_usuario = $cod_usuario ,cod_turma = $cod_turma ,horainicio = '$horainicio',horafim = '$horafim',
            dia_da_semana = '$diaSemana',materia = '$materia',professor = '$professor' where cod_horario = '$cod_horario'";
            $res = mysqlexecuta($con,$sql);
        ?>
        Horário alterado com sucesso !!!
    </body>
</html>
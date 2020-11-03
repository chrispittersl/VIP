<hmtl>
	<head>
		<title>
			Inclusão de registros em Horário de Aula
        </title>
	</head>
	<body >
		
		<?php
			$cod_usuario= $_POST["cod_usuario"];
			$cod_turma= $_POST["cod_turma"];
			$horainicio= $_POST["horainicio"];
			$horafim= $_POST["horafim"];
			$diadasemana= $_POST["diadasemana"];
			$materia= $_POST["materia"];
			$professor= $_POST["professor"];
			
			include 'config.php';
			include 'mysqlexecuta.php';
			
			$con = conectar();
			
			mysql_select_db('vip');
			
			$sql = "insert into reunioes(horario_reuniao,data_reuniao,descricao,nome,data_agendamento,num_sala,cod_usuario)
			Values('$horario_reuniao','$data_reuniao','$descricao','$nome','$data_agendamento',$num_sala,$cod_usuario)";
			
			$sql = "insert into horario_aula(cod_usuario,cod_turma,horainicio,horafim,dia_da_semana,materia,professor) 
			Values ($cod_usuario,$cod_turma,'$horainicio','$horafim','$diadasemana','$materia','$professor')";
			
			$res = mysqlexecuta($con,$sql);
			
			echo  "inclusão efetuada com sucesso !!";
		?>
	</body>
</hmtl>
<html lang="pt-br"><head><title> Alteração de dados: Horários</title>
<meta charset="utf-8"> 
<script language = "javascript">

function blockletras(objEvent)
{
	var iKeyCode;
	iKeyCode = objEvent.keyCode;
	if(iKeyCode>=48 && iKeyCode<=57) return true;
	return false;
}

</script>
</head>
<body>
<?php
include 'config.php';
include 'mysqlexecuta.php';
$con = conectar();
mysql_select_db('vip');
$codHora = $_POST["txtCod"];
$sql="SELECT * from horario_aula where cod_horario = $codHora";
$res = mysqlexecuta($con,$sql);
$quant = (mysql_num_rows($res));

if ($quant==0) {
	echo "Horário não Cadastrado !!";
	}
	else 	{
		$row = mysql_fetch_array($res);
	?>
		<form name="f1" method="POST" action="altHorarios_altera.php">
		Código de horário:  <?php echo $row['cod_horario'] ?>
		Código de usuário: <input type='text' name='cod_usuario' placeholder="<?php echo $row['cod_usuario'];?>" required>
		Código de turma: <input type='text' name='cod_turma' placeholder='<?php echo $row['cod_turma'];?>' required>
		Horário de Início: <input type='text' name='horainicio' placeholder='<?php echo $row['horainicio'];?>' required>
        Horário de Fim: <input type='text' name='horafim' placeholder='<?php echo $row['horafim'];?>' required>
        Dia Da Semana: <input type='text' name='diaSemana' placeholder='<?php echo $row['dia da semana'];?>' required>
        Matéria: <input type='text' name='materia' placeholder='<?php echo $row['materia'];?>' required>
        Professor: <input type='text' name='professor' placeholder='<?php echo $row['professor'];?>' required>
		<input type="submit" name ="botao" placeholder="Alterar Dados">	
		</form>
		<?php
	}
?>
</body>
</html>
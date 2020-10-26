<html><head><title> Alteração de dados: Horários</title>
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
<body bgcolor=white>
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
	echo "<p align='center'>"."<b>"."<font color='red'>"."Horário não Cadastrado !!"."</font>"."</b>"."</p>";
	}
	else 	{
		$row = mysql_fetch_array($res);
	?>
		<form name="f1" method="POST" action="altHorarios_change.php">
		<p><b>Código: </b> <?php echo $row['cod_horario'] ?></p>
		<input type="hidden" name="cod_horario"  onkeypress= "return blockletras(event)" value=<?php echo $row['cod_horario'];?>>
		<p><b>Horário de Início: </b><input type='text' name='horainicio' value='<?php echo $row['horainicio'];?>' required>
        </p>
        <p><b>Horário de Fim: </b><input type='text' name='horafim' value='<?php echo $row['horafim'];?>' required>
        </p>
        <p><b>Dia Da Semana: </b><input type='text' name='diaSemana' value='<?php echo $row['diaSemana'];?>' required>
        </p>
        <p><b>Matéria: </b><input type='text' name='materia' value='<?php echo $row['materia'];?>' required>
        </p>
        <p><b>Professor: </b><input type='text' name='professor' value='<?php echo $row['professor'];?>' required>
		</p>
		<center> <br> <br>	<input type="submit" name ="botao" value="Alterar Dados"></p><br>	</center>
		</form>
		<?php
	}
?>
<p>		<a href='index.html'><p align="center">Voltar para Menu Principal</p></a>
</body>
</html>
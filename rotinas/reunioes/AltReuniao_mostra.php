<html lang="pt-br"><head><title> Alteração de Disciplinas</title>
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
$cod_reuniao = $_POST["cod_reuniao"];
$sql="SELECT * from reunioes where cod_reuniao = $cod_reuniao";
$res = mysqlexecuta($con,$sql);
$quant = (mysql_num_rows($res));

if ($quant==0) {
	echo "<p align='center'> Reunião não Cadastrada!! </p>";
	}
	else 	{
		$row = mysql_fetch_array($res);
	?>
		<form name = "f1" method="POST" action="AltReuniao_altera.php">
		<p><b>Código da reunião:</b> <?php echo $row['cod_reuniao'] ?></p>
		<input type="hidden" name="cod_reuniao" value=<?php echo $row['cod_reuniao'];?>>
		<p><b>Horário da Reunião:</b><input type='text' name='horario_reuniao' value='<?php echo $row['horario_reuniao'];?>' required>
		</p>
		<p><b>Data da reunião:</b><input type='text' name='data_reuniao' value='<?php echo $row['data_reuniao'];?>' required>
		</p>
		<p><b>Descrição:</b><input type='text' name='descricao' value='<?php echo $row['descricao'];?>' required>
		</p>
		<p><b>Nome:</b><input type='text' name='nome' value='<?php echo $row['nome'];?>' required>
		</p>
		<p><b>Data de agentamento:</b><input type='text' name='data_agendamento' value='<?php echo $row['data_agendamento'];?>' required>
		</p>
		<p><b>Número de sala:</b><input type='text' name='num_sala' onkeypress= "return blockletras(event)" value='<?php echo $row['num_sala'];?>' required>
		</p>
		<p><b>Código de usuário:</b><input type='text' name='cod_usuario' onkeypress= "return blockletras(event)" value='<?php echo $row['cod_usuario'];?>' required>
		</p>
		<center> <br> <br>	<input type="submit" name ="botao" value="Alterar Dados"></p><br></center>
		</form>
		<?php
	}
?>
</body>
</html>
<html lang="pt-br"><head><title> Alteração de TCC</title>
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
<body >
<?php
include 'config.php';
include 'mysqlexecuta.php';
$con = conectar();
mysql_select_db('vip');
$cod_TCC = $_POST["txtCod"];
$sql="SELECT * from TCC where cod_TCC = $cod_TCC";
$res = mysqlexecuta($con,$sql);
$quant = (mysql_num_rows($res));

if ($quant==0) {
	echo ""."TCC não Cadastrado !!".""."";
	}
	else 	{
		$row = mysql_fetch_array($res);
	?>
<<<<<<< HEAD
		<form name = "f1" method="POST" action="AltTcc_altera.php">
		<p><b>Código do Tcc: </b> <?php echo $row['cod_tcc'] ?></p>
		<input type="hidden" name="cod_usuario" value=<?php echo $row['cod_tcc'];?>>
		<p><b>Horário Tcc: </b><input type='text' name='horario_tcc' value='<?php echo $row['horario_tcc'];?>' required>
		</p>
		<p><b>Data Tcc: </b><input type='text' name='data_tcc' value='<?php echo $row['data_tcc'];?>' required>
		</p>
		<p><b>Descricao: </b><input type='text' name='descricao' value='<?php echo $row['descricao'];?>' required>
		</p>
		<p><b>Nome: </b><input type='text' name='nome' value='<?php echo $row['nome'];?>' required>
		</p>
		<p><b>Data de Agendamento: </b><input type='text' name='data_agendamento' value='<?php echo $row['data_agendamento'];?>' required>
		</p>
		<p><b>Numero Sala: </b><input type='text' name='num_sala' value='<?php echo $row['num_sala'];?>' required>
		</p>
		<p><b>Código do Usuario:</b><input type='text' name='cod_usuario' onkeypress= "return blockletras(event)" value='<?php echo $row['cod_usuario'];?>' required>
		</p>
		<center> <br> <br>	<input type="submit"  value="Alterar Dados"></p><br>	</center>
=======
		<form name = "f1" method="POST" action="AltTCC_altera.php">
		Código do TCC:  <?php echo $row['cod_TCC'] ?>
		<input type="hidden" name="cod_usuario" value=<?php echo $row['cod_TCC'];?>>
		Horário TCC: <input type='text' name='horario_TCC' value='<?php echo $row['horario_TCC'];?>' required>
		
		Data TCC: <input type='text' name='data_TCC' value='<?php echo $row['data_TCC'];?>' required>
		
		Descricao: <input type='text' name='descricao' value='<?php echo $row['descricao'];?>' required>
		
		Nome: <input type='text' name='nome' value='<?php echo $row['nome'];?>' required>
		
		Data de Agendamento: <input type='text' name='data_agendamento' value='<?php echo $row['data_agendamento'];?>' required>
		
		Numero Sala: <input type='text' name='num_sala' value='<?php echo $row['num_sala'];?>' required>
		
		Código do Usuario:<input type='text' name='cod_usuario' onkeypress= "return blockletras(event)" value='<?php echo $row['cod_usuario'];?>' required>
		
		  	<input type="button" name ="botao" value="Alterar Dados">	
>>>>>>> d6e9fa9867aeab914aba3c31877761ccadd12ed6
		</form>
		<?php
	}
?>
		<a href='index.html'>Voltar para Menu Principal</a>
</body>
</html>
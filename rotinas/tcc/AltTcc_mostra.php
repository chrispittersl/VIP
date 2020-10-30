<html><head><title> Alteração de Tcc</title>
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
$cod_tcc = $_POST["txtCod"];
$sql="SELECT * from tcc where cod_tcc = $cod_tcc";
$res = mysqlexecuta($con,$sql);
$quant = (mysql_num_rows($res));

if ($quant==0) {
	echo "<p align='center'>"."<b>"."<font color='red'>"."Tcc não Cadastrado !!"."</font>"."</b>"."</p>";
	}
	else 	{
		$row = mysql_fetch_array($res);
	?>
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
		</form>
		<?php
	}
?>
<p>		<a href='index.html'><p align="center">Voltar para Menu Principal</p></a>
</body>
</html>
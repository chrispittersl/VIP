<html lang="pt-br"><head><title> Alteração de tcc</title>
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
$cod_tcc = $_POST["cod_tcc"];
$sql="SELECT * from tcc where cod_tcc = $cod_tcc";
$res = mysqlexecuta($con,$sql);
$quant = (mysql_num_rows($res));

if ($quant==0) {
	echo "TCC requerido está sem cadastro!";
	}
	else {
		$row = mysql_fetch_array($res);
	?>
		<form name = "f1" method="POST" action="Alttcc_altera.php">
		Código de tcc: <?php echo $row['cod_tcc']?>
		<input type="hidden" name="cod_tcc" value=<?php echo $row['cod_tcc'];?>>
		Horário tcc: <input type='text' name='horario_tcc' placeholder='<?php echo $row['horario_tcc'];?>' required>
		data tcc: <input type='text' name='data_tcc' placeholder='<?php echo $row['data_tcc'];?>' required>
		Descricao: <input type='text' name='descricao' placeholder='<?php echo $row['descricao'];?>' required>
		Nome: <input type='text' name='nome' placeholder='<?php echo $row['nome'];?>' required>
		data de agendamento: <input type='text' name='data_agendamento' placeholder='<?php echo $row['data_agendamento'];?>' required>
		Numero Sala: <input type='text' name='num_sala' onkeypress= "return blockletras(event)" placeholder='<?php echo $row['num_sala'];?>' required>
		Código de Usuario:<input type='text' name='cod_usuario' onkeypress= "return blockletras(event)" placeholder='<?php echo $row['cod_usuario'];?>' required>
		<input type="submit" name ="botao" placeholder="Alterar dados">	
		</form>
		<?php
	}
?>
</body>
</html>
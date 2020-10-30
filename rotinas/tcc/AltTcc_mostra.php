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
		</form>
		<?php
	}
?>
		<a href='index.html'>Voltar para Menu Principal</a>
</body>
</html>
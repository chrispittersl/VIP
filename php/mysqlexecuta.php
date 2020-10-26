<HTML>
<HEAD>
 <TITLE>PHP - Fun��o Executa Comandos SQL</TITLE>
</HEAD>
<BODY>
<?php

/*
$id - ponteiro da conex�o aberta
$sql - clausula sql a executar
$erro - Especifica se a fun��o exibe ou n�o (0=n�o, 1=sim)
$res - resposta
*/
function mysqlexecuta($id, $sql, $erro = 1)
{
     if (empty($sql) OR !($id))
     return 0; //erro na conex�o ou no comando sql
     
     if (!($res = @mysql_query($sql, $id)))
     {
     if($erro)
		echo "Ocorreu um erro na execução do comando sql no banco de dados. Favor contactar o administrador";
		echo "<br>" . "<b> Comando: </b>" . $sql . "<br> id: </b>" . $id . "<br>";
	
     exit;
     }
     return $res;
}

?>
</BODY>
</HTML>

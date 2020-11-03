<HTML>
<HEAD>
 <TITLE>PHP - Função Executa Comandos SQL</TITLE>
</HEAD>
<BODY>
<?php

/*
$id - ponteiro da conexão aberta
$sql - clausula sql a executar
$erro - Especifica se a função exibe ou não (0=não, 1=sim)
$res - resposta
*/
function mysqlexecuta($id, $sql, $erro = 1)
{
     if (empty($sql) OR !($id))
     return 0; //erro na conexão ou no comando sql
     
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

<HTML>
<HEAD>
 <TITLE>PHP - Função Executa Comandos SQL</TITLE>
</HEAD>
<BODY>
<?php

function mysqlexecuta($id,$sql,$erro = 1){
         if(empty($sql) or !($id))
         return 0;
         if (!($res = @mysql_query($sql,$id))){
            if($erro)
            echo "Ocorreu um erro na execução do Comando SQL no banco de dados. Favor Contactar o Administrador";
            echo "<br>" .  "<b> Comando: </b>" . $sql . "<b><br>Id: </b>" . $id . "<br>";
            exit;
         }
          return $res;
         }
?>
</BODY>
</HTML>

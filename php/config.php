<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY>
<?php

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
     function conectar()
     {
        $hostdb = '127.0.0.1';   //servidor mysql, pode ser o nome (localhost) ou o endereço ip (127.0.0.1)
        $userdb = 'root';  //usuario do mysql que terá o acesso
        $passdb = '';      //senha do usuario
        
        if ($con = mysql_pconnect($hostdb, $userdb, $passdb))
        {
           return $con; //se a conexão for bem sucedida, será retornado a variavel $con
        }
        else
        {
            return 0; //se a conexão não ocorrer, será retornado 0
        }
     }
?>
</BODY>
</HTML>

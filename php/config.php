<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY>
<?php

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
     function conectar()
     {
        $hostdb = '127.0.0.1';   //servidor mysql, pode ser o nome (localhost) ou o endere�o ip (127.0.0.1)
        $userdb = 'root';  //usuario do mysql que ter� o acesso
        $passdb = '';      //senha do usuario
        
        if ($con = mysql_pconnect($hostdb, $userdb, $passdb))
        {
           return $con; //se a conex�o for bem sucedida, ser� retornado a variavel $con
        }
        else
        {
            return 0; //se a conex�o n�o ocorrer, ser� retornado 0
        }
     }
?>
</BODY>
</HTML>

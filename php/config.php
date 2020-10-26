<<<<<<< HEAD
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
=======
<html>
<head>
<title>Documento PHP</title>
</head>
<body>
<?php

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

     function conectar(){
     $hostdb = '127.0.0.1'; //servidor mysql, pode ser o nome (localhost) ou o endereço ip (127.0.0.1)
     $userdb= 'root'; //usuário do mysql que terá o acesso
     $passdb= ''; //senha do usuário
     
     if ($con = mysql_pconnect($hostdb,$userdb,$passdb)){
        return $con; //se a conexao for bem sucedida, sera retornado a variavel $con
     }
     else{
          return 0; //se a conexao nao ocorrer, sera retornado 0
     }
     }
?>
</body>
</html>
>>>>>>> e76a255b6cc6cc3b7a5820f9f9caf58069a497f5

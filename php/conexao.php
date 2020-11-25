<?php
    try{
        $pdo = new PDO("mysql:host=127.0.0.1;dbname=vip","root","");
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>
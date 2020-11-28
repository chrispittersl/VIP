<?php
    session_start();
    $logged = $_SESSION['logged'] ?? NULL;
    if($logged == TRUE){
        
    }
    else{
        header("Location: /");
    }
?>
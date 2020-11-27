<?php
    session_start();
    if($_SESSION['logged'] == TRUE){
        
    }
    else{
        header("Location: /");
    }
?>
<?php
    session_start();
    $logged = $_SESSION['logged'] ?? NULL;
    if($logged == TRUE){
        if($_SESSION['user'] == "adm"){
        }
        else{
            include_once "logout.php";
        }
    }
    else{
        include_once "logout.php";
    }
?>
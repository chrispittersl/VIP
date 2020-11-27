<?php
    session_start();
    if($_SESSION['logged'] == TRUE){
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
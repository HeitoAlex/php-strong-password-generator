<?php 
session_start();

if (isset($_SESSION["Logged"]) && $_SESSION["Logged"] === true){
    
    session_unset();
    header('location: ./login.php');
}

?>
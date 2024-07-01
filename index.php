<?php 
session_start();

if(!isset ($_SESSION['Logged'])){
    header('location: ./login.php');
}


?>
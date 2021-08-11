<?php 

// INITIALIZE THE SESSION
session_start();

// CHECK IF THE USER IS LOGGED IN, IF NOT REDIRECT TO LOGIN PAGE
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>
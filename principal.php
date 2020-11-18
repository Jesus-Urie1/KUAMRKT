<?php session_start();

    if(isset($_SESSION['email'])){
        require 'index.php';
    }else{
        header ('location: login_backed/login.php');
    }
        
?>
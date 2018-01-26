<?php
include('includes/common.php');
//session_start();
if(!isset($_SESSION['email']))
{
    header('location:login.php');
}

//var_dump($_SESSION);
session_destroy();
//unset($_SESSION['email']);

//var_dump($_SESSION);
header('location:index.php');
?>


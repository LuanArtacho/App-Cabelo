<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
$data = $_POST['data'];


$_SESSION['data']=$data;
header('location:../horacabelo.php');
?>
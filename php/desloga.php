<?php
header("content-type: text/html;charset=utf-8");
session_start();

unset($_SESSION['nome']);
session_destroy();
		echo "<script>alert('deslogado com sucesso');window.location.href='../inicio.php';</script>";
		
?>
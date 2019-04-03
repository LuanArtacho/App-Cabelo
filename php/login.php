<?php
session_start();
header("content-type: text/html;charset=utf-8");

	include_once('conec_salao.php');

//verificando se os campos do formulario foram preenchidos
if (!empty($_GET['femail']) &&
	!empty($_GET['fsenha'])) {

	$email=$_GET['femail'];
	$senha=md5($_GET['fsenha']);

	$nome=$_GET['fnome'];
	$_SESSION['nome']=$nome;

	//criando uma varialvel para armazenar o comando sql
	$sql="SELECT * FROM cliente where email ='$email' and senha = '$senha'";
echo($sql);

	$resultado= mysqli_query($conn,$sql);
	if ($resultado){
		if ($linha=mysqli_fetch_array($resultado)){
			$_SESSION['nome']=$linha['nome'];
		
	  	echo "<script>window.location.href='../pos_log.php';</script>";}
}
		else{	
		echo "<script>alert('Cliente não encontrado!');
		window.location.href='../inicio.php';</script>";}
 }	
?>
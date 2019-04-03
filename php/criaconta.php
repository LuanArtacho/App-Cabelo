<?php
header("content-type: text/html;charset=utf-8");
//session_start();

if (isset($_GET['fnome']) && 
	isset($_GET['fsobrenome']) &&
	isset($_GET['femail']) &&
	isset($_GET['fsenha'])) {

	$nome=$_GET['fnome'];
	//$_SESSION['nome']=$nome;
	$sobrenome=$_GET['fsobrenome'];
	$email=$_GET['femail'];
	$senhaCripto=md5($_GET['fsenha']);

	include_once('conec_salao.php');

	$sql="INSERT INTO cliente (nome,sobrenome,email,senha) VALUES ('$nome','$sobrenome','$email','$senhaCripto')";

	$resultado= mysqli_query($conn,$sql);

	if ($resultado==true){
		echo "<script>alert('Registro salvo com sucesso');window.location.href='../inicio.php';</script>";}
		else{
		echo "<script>alert('Falha na gravação do registro');
					window.location.href='../criaconta.html';</script>";}
}

?>
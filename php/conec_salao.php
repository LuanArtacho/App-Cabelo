<?php
//conectando ao banco de dados
$servidor="localhost";
$usuario="root";
$senha1="usbw";
$banco_dados="salao";

$conn = mysqli_connect($servidor, $usuario, $senha1, $banco_dados);
/* ou... se, utilizar variaveis de memória
$conn = new mysqli("localhost","root","usbw","ti13");
*/
//verificando se a conexão foi efetuada corretamente
if ($conn==TRUE) {
	mysqli_query( $conn, "SET NAMES 'utf8'" );
	mysqli_query( $conn, 'SET character_set_connection=utf8' );
	mysqli_query( $conn, 'SET character_set_client=utf8' );
	mysqli_query( $conn, 'SET character_set_results=utf8' );
}
else
{
echo '<script>alert("A conexão falhou!")</script>';
	
}


?>
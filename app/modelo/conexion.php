<?php 
	$servidor = "localhost";
	$usuario = "root";
	$pass = "qaz";
	$bd = "frases";

	$mysqli = new mysqli($servidor, $usuario, $pass, $bd);
	if ($mysqli->connect_errno) {
		echo "Error";
	}
?>
<?php 
	include ("conexion.php");

	$user = trim(htmlentities($_GET["usuario"]));
	$pass = trim(htmlentities($_GET["password"]));

	$user = $mysqli->real_escape_string($user);
	$pass = $mysqli->real_escape_string($pass);

	$query = $mysqli->query("select * from usuarios where nombre='$user' and password = '$pass'");
 ?>
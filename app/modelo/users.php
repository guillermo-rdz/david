<?php 
	include ("conexion.php");

	$user = trim(htmlentities($_GET["usuario"]));
	$pass = trim(htmlentities($_GET["password"]));

	$user = $mysqli->real_escape_string($user);
	$pass = $mysqli->real_escape_string($pass);

	$result = $mysqli->query("SELECT iduser,nombre,password,area,type FROM users,areas WHERE nombre='$user' and password = '$pass' and fkiduser=idarea");
	$row = $result->fetch_assoc();
	$datos = array("nombre"=>$row['nombre'],"password"=>$row['password'],"area"=>$row['area'],
					"type"=>$row['type']);

	if ($fila = $result->num_rows==1) {
		session_start();
		$_SESSION["conectado"] = true;
		$_SESSION["rango"] = $row['type'];
		$_SESSION['area'] = $row['area'];
		$salida = array('mensaje' =>"Bienvenido al Area de: ".$row['area'],'json'=>$datos,"validate"=>"true");
		$salida = json_encode($salida);
		echo $salida;
	} else {
		$salida = array('mensaje'=>"Tu usuario y password no existen, corrobora tus datos","validate"=>"false");
		$salida = json_encode($salida);
		echo $salida;
	}

	$mysqli->close();
 ?>
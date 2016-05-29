<?php 
	session_start();
	//echo $_SESSION["rango"];
	//echo $_SESSION['area'];

	$arreglo = array('rango' => $_SESSION['rango'], 'area' => utf8_encode($_SESSION['area']));

	echo json_encode($arreglo);
?>
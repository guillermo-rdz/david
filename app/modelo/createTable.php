<?php
	include ('conexion.php');

	$busca = utf8_decode($_GET['info']);
	$busca = $mysqli->real_escape_string($busca);
	$type = $_GET['rango'];

	$query = $mysqli->query("SELECT * FROM frase WHERE frase_esp LIKE '%$busca%' AND type = '$type'");

		$arreglo = array();
		while ($row = $query->fetch_assoc()) {
			//$arreglo[] = $row;
			$frase_esp = $row['frase_esp'];
			$frase_tso = $row['frase_tso'];

			$arreglo[] = array("t1" => utf8_encode($frase_esp), "t2" => utf8_encode($frase_tso));
		}
		echo json_encode($arreglo);
?>
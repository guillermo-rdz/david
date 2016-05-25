<?php 
	include ('conexion.php');

	$busca = utf8_decode($_GET['info']);

	//$query = $mysqli->query("SELECT frase_esp FROM frase limit 8");
	$query = $mysqli->query("SELECT frase_esp FROM frase WHERE frase_esp LIKE '%$busca%' limit 8");

		$arreglo = array();
		while ($row = $query->fetch_assoc()) {
			$arreglo[] = utf8_encode($row['frase_esp']);
		}
		
		echo json_encode($arreglo);

?>
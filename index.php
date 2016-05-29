<?php 
	require ("app/controlador/controlador.php");
	$mvc = new controller();

	if (empty($_GET['action'])) {
		$_GET['action'] = 'login';
	}
	else if (empty($_GET['subaction'])) {
		$_GET['subaction'] = 'pp';
	}
	if ($_GET['action'] == 'login') {
		$mvc->login();
	}
	if ($_GET['action'] == 'lexicon' && $_GET['subaction'] == 'buscar') {
		$mvc->lexicon();
	}
	if ($_GET['action'] == 'lexicon' && $_GET['subaction'] == 'logout') {
		$mvc->logout();
	}

	else if ($_GET['action'] == 'traumatologia') {
		if ($_GET['action'] == 'traumatologia' && $_GET['subaction'] == 'pp') {
			$mvc->traumapp();
		}
		else if ($_GET['action'] == 'traumatologia' && $_GET['subaction'] == 'au') {
			$mvc->traumaau();
		}
		else if ($_GET['action'] == 'traumatologia' && $_GET['subaction'] == 'pc') {
			$mvc->traumapc();
		}
		else if ($_GET['action'] == 'traumatologia' && $_GET['subaction'] == 'pcomplejas') {
			$mvc->traumapcomplejas();
		}
		else if ($_GET['action'] == 'traumatologia' && $_GET['subaction'] == 'logout') {
			$mvc->logout();
		}

	}
	else if ($_GET['action'] == 'pediatria') {
		if ($_GET['action'] == 'pediatria' && $_GET['subaction'] == 'pp') {
			$mvc->pediatriapp();
		}
		else if ($_GET['action'] == 'pediatria' && $_GET['subaction'] == 'au') {
			$mvc->pediatriaau();
		}
		else if ($_GET['action'] == 'pediatria' && $_GET['subaction'] == 'pc') {
			$mvc->pediatriapc();
		}
		else if ($_GET['action'] == 'pediatria' && $_GET['subaction'] == 'pcomplejas') {
			$mvc->pediatriapcomplejas();
		}
		else if ($_GET['action'] == 'pediatria' && $_GET['subaction'] == 'logout') {
			$mvc->logout();
		}
	}
 ?>
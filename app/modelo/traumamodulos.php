<?php 

	$idp = $_GET["idp"];

	switch ($idp) {

		case 'tpp1':
			$pagina = load_page("../vista/modulos/traumatologia/pp1.html");
			echo $pagina;
			break;
		case 'tpp2':
			$pagina = load_page("../vista/modulos/traumatologia/pp2.html");
			echo $pagina;
			break;

		case 'tpp3':
			$pagina = load_page("../vista/modulos/traumatologia/pp3.html");
			echo $pagina;
			break;

		case 'tpp4':
			$pagina = load_page("../vista/modulos/traumatologia/pp4.html");
			echo $pagina;
			break;

		case 'tpp5':
			$pagina = load_page("../vista/modulos/traumatologia/pp5.html");
			echo $pagina;
			break;

		case 'tpp6':
			$pagina = load_page("../vista/modulos/traumatologia/pp6.html");
			echo $pagina;
			break;

		case 'tpp7':
			$pagina = load_page("../vista/modulos/traumatologia/pp7.html");
			echo $pagina;
			break;

		case 'tpp8':
			$pagina = load_page("../vista/modulos/traumatologia/pp8.html");
			echo $pagina;
			break;

		case 'tpp9':
			$pagina = load_page("../vista/modulos/traumatologia/pp9.html");
			echo $pagina;
			break;

		case 'tpp10':
			$pagina = load_page("../vista/modulos/traumatologia/pp10.html");
			echo $pagina;
			break;


		case 'tau1':
			$pagina = load_page("../vista/modulos/traumatologia/tau1.html");
			echo $pagina;
			break;

		case 'tau2':
			$pagina = load_page("../vista/modulos/traumatologia/tau2.html");
			echo $pagina;
			break;

		case 'tau3':
			$pagina = load_page("../vista/modulos/traumatologia/tau3.html");
			echo $pagina;
			break;

		case 'tau4':
			$pagina = load_page("../vista/modulos/traumatologia/tau4.html");
			echo $pagina;
			break;

		case 'tau5':
			$pagina = load_page("../vista/modulos/traumatologia/tau5.html");
			echo $pagina;
			break;	

		case 'tau6':
			$pagina = load_page("../vista/modulos/traumatologia/tau6.html");
			echo $pagina;
			break;

		case 'tau7':
			$pagina = load_page("../vista/modulos/traumatologia/tau7.html");
			echo $pagina;
			break;

		
		case 'tpc1':
			$pagina = load_page("../vista/modulos/traumatologia/tpc1.html");
			echo $pagina;
			break;	

		case 'tpc2':
			$pagina = load_page("../vista/modulos/traumatologia/tpc2.html");
			echo $pagina;
			break;
	    case 'tpc3':
			$pagina = load_page("../vista/modulos/traumatologia/tpc3.html");
			echo $pagina;
     		break;	


     	case 'tpcom1':
     		$pagina = load_page("../vista/modulos/traumatologia/tpcom1.html");
			echo $pagina;
   			break;
     	case 'tpcom2':
     		$pagina = load_page("../vista/modulos/traumatologia/tpcom2.html");
			echo $pagina;
     		break;
     	case 'tpcom3':
     		$pagina = load_page("../vista/modulos/traumatologia/tpcom3.html");
			echo $pagina;
     		break;
     	case 'tpcom4':
     		$pagina = load_page("../vista/modulos/traumatologia/tpcom4.html");
			echo $pagina;
     		break;
     			


		default:
			$pagina = "hola mundo";
			echo $pagina;
			break;
	}

	function load_page($page)
	{
		return file_get_contents($page);
	}
 ?>
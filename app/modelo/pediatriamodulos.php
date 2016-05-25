<?php 

	$idp = $_GET["idp"];

	switch ($idp) {

		case 'p_pp1':
			$pagina = load_page("../vista/modulos/pediatria/p_pp1.html");
			echo $pagina;
			break;
		case 'p_pp2':
			$pagina = load_page("../vista/modulos/pediatria/p_pp2.html");
			echo $pagina;
			break;

		case 'p_pp3':
			$pagina = load_page("../vista/modulos/pediatria/p_pp3.html");
			echo $pagina;
			break;

		case 'p_pp4':
			$pagina = load_page("../vista/modulos/pediatria/p_pp4.html");
			echo $pagina;
			break;

		case 'p_pp5':
			$pagina = load_page("../vista/modulos/pediatria/p_pp5.html");
			echo $pagina;
			break;

		case 'p_au1':
			$pagina = load_page("../vista/modulos/pediatria/p_au1.html");
			echo $pagina;
			break;

		case 'p_au2':
			$pagina = load_page("../vista/modulos/pediatria/p_au2.html");
			echo $pagina;
			break;

		case 'p_au3': 
			$pagina = load_page("../vista/modulos/pediatria/p_au3.html");
			echo $pagina;
			break;

		case 'p_au4':
			$pagina = load_page("../vista/modulos/pediatria/p_au4.html");
			echo $pagina;
			break;

		case 'p_au5':
			$pagina = load_page("../vista/modulos/pediatria/p_au5.html");
			echo $pagina;
			break;

		case 'p_au6':
			$pagina = load_page("../vista/modulos/pediatria/p_au6.html");
			echo $pagina;
			break;

		case 'p_au7':
			$pagina = load_page("../vista/modulos/pediatria/p_au7.html");
			echo $pagina;
			break;

		case 'p_au8':
			$pagina = load_page("../vista/modulos/pediatria/p_au8.html");
			echo $pagina;
			break;

		case 'p_au9':
			$pagina = load_page("../vista/modulos/pediatria/p_au9.html");
			echo $pagina;
			break;

		case 'p_pc1':
			$pagina = load_page("../vista/modulos/pediatria/p_pc1.html");
			echo $pagina;
			break;


		case 'p_pcom1':
			$pagina = load_page("../vista/modulos/pediatria/p_pcom1.html");
			echo $pagina;
			break;	

		case 'p_pcom2':
			$pagina = load_page("../vista/modulos/pediatria/p_pcom2.html");
			echo $pagina;
			break;

		case 'p_pcom3':
			$pagina = load_page("../vista/modulos/pediatria/p_pcom3.html");
			echo $pagina;
			break;

		
		case 'p_pcom4':
			$pagina = load_page("../vista/modulos/pediatria/p_pcom4.html");
			echo $pagina;
			break;	

		case 'p_pcom5':
			$pagina = load_page("../vista/modulos/pediatria/p_pcom5.html");
			echo $pagina;
			break;

	    case 'p_pcom6':
			$pagina = load_page("../vista/modulos/pediatria/p_pcom6.html");
			echo $pagina;
     		break;	

     	
     	default:
			$pagina = "algo hiciste mal, y por eso no aparece lo que deberia, CORRIGELO!!!";
			echo $pagina;
			break;
	}

	function load_page($page)
	{
		return file_get_contents($page);
	}
 ?>
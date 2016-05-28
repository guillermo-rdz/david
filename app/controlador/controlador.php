<?php 
	session_start();
	class controller{
		public function login(){
			include("app/vista/login.html");
		}
		/*
		public function trauma(){
			include("app/vista/trauma.html");
		}
		public function pediatria(){
			include("app/vista/pediatria.html");
		}
		*/

		// Traumatologia
		public function traumapp(){
			if(isset($_SESSION['conectado']) && $_SESSION['area']=="trauma"){
				$pagina = $this->load_page("app/vista/trauma.html");
				$html = $this->load_page("app/vista/modulos/traumatologia/listapp.html");
				$pagina = $this->replace("/\#LISTA\#/",$html,$pagina);
				$this->view_page($pagina);
			} else
				header("location: /david");
		}
		public function traumaau(){
			if($_SESSION['conectado'] && $_SESSION['area']=="trauma"){
				$pagina = $this->load_page("app/vista/trauma.html");
				$html = $this->load_page("app/vista/modulos/traumatologia/listaau.html");
				$pagina = $this->replace("/\#LISTA\#/",$html,$pagina);
				$this->view_page($pagina);
			} else
				header("location: /david");
		}
		public function traumapc(){
			if($_SESSION['conectado'] && $_SESSION['area']=="trauma"){
				$pagina = $this->load_page("app/vista/trauma.html");
				$html = $this->load_page("app/vista/modulos/traumatologia/listapc.html");
				$pagina = $this->replace("/\#LISTA\#/",$html,$pagina);
				$this->view_page($pagina);
			} else
				header("location: /david");
		}
		public function traumapcomplejas(){
			if($_SESSION['conectado'] && $_SESSION['area']=="trauma"){
				$pagina = $this->load_page("app/vista/trauma.html");
				$html = $this->load_page("app/vista/modulos/traumatologia/listapcomplejas.html");
				$pagina = $this->replace("/\#LISTA\#/",$html,$pagina);
				$this->view_page($pagina);
			} else
				header("location: /david");
		}

		
		// Pediatria
		public function pediatriapp(){
			if($_SESSION['conectado'] && $_SESSION['area']=="pediatria"){				
				$pagina = $this->load_page("app/vista/pediatria.html");
				$html = $this->load_page("app/vista/modulos/pediatria/listapp.html");
				$pagina = $this->replace("/\#CONTENIDO\#/",$html,$pagina);
				$this->view_page($pagina);
			} else
				header("location: /david");
		}
		public function pediatriaau(){
			if($_SESSION['conectado'] && $_SESSION['area']=="pediatria"){
				$pagina = $this->load_page("app/vista/pediatria.html");
				$html = $this->load_page("app/vista/modulos/pediatria/listaau.html");
				$pagina = $this->replace("/\#CONTENIDO\#/",$html,$pagina);
				$this->view_page($pagina);
			} else
				header("location: /david");
		}
		public function pediatriapc(){
			if($_SESSION['conectado'] && $_SESSION['area']=="pediatria"){
				$pagina = $this->load_page("app/vista/pediatria.html");
				$html = $this->load_page("app/vista/modulos/pediatria/listapc.html");
				$pagina = $this->replace("/\#CONTENIDO\#/",$html,$pagina);
				$this->view_page($pagina);
			} else
				header("location: /david");
		}
		public function pediatriapcomplejas(){
			if($_SESSION['conectado'] && $_SESSION['area']=="pediatria"){
				$pagina = $this->load_page("app/vista/pediatria.html");
				$html = $this->load_page("app/vista/modulos/pediatria/listapcomplejas.html");
				$pagina = $this->replace("/\#CONTENIDO\#/",$html,$pagina);
				$this->view_page($pagina);
			} else
				header("location: /david");
		}

		//LEXICON
		public function lexicon(){
			if($_SESSION['conectado']){
				$pagina = $this->load_page("app/vista/lexicon.html");
				$this->view_page($pagina);
			} else
				header("location: /david");
		}

		public function logout(){
			session_unset();
			session_destroy();

			header('location: /david');
		}


		// funciones privadass
		private function load_page($page){
			return file_get_contents($page);
		}

		private function view_page($html){
			echo $html;
		}

		private function replace($in, $out, $pagina){
			return preg_replace($in, $out, $pagina);
		}
	}
 ?>
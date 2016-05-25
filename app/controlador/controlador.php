<?php 
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
			$pagina = $this->load_page("app/vista/trauma.html");
			$html = $this->load_page("app/vista/modulos/traumatologia/listapp.html");
			$pagina = $this->replace("/\#LISTA\#/",$html,$pagina);
			$this->view_page($pagina);
		}
		public function traumaau(){
			$pagina = $this->load_page("app/vista/trauma.html");
			$html = $this->load_page("app/vista/modulos/traumatologia/listaau.html");
			$pagina = $this->replace("/\#LISTA\#/",$html,$pagina);
			$this->view_page($pagina);
		}
		public function traumapc(){
			$pagina = $this->load_page("app/vista/trauma.html");
			$html = $this->load_page("app/vista/modulos/traumatologia/listapc.html");
			$pagina = $this->replace("/\#LISTA\#/",$html,$pagina);
			$this->view_page($pagina);
		}
		public function traumapcomplejas(){
			$pagina = $this->load_page("app/vista/trauma.html");
			$html = $this->load_page("app/vista/modulos/traumatologia/listapcomplejas.html");
			$pagina = $this->replace("/\#LISTA\#/",$html,$pagina);
			$this->view_page($pagina);
		}

		
		// Pediatria
		public function pediatriapp(){
			$pagina = $this->load_page("app/vista/pediatria.html");
			$html = $this->load_page("app/vista/modulos/pediatria/listapp.html");
			$pagina = $this->replace("/\#CONTENIDO\#/",$html,$pagina);
			$this->view_page($pagina);
		}
		public function pediatriaau(){
			$pagina = $this->load_page("app/vista/pediatria.html");
			$html = $this->load_page("app/vista/modulos/pediatria/listaau.html");
			$pagina = $this->replace("/\#CONTENIDO\#/",$html,$pagina);
			$this->view_page($pagina);
		}
		public function pediatriapc(){
			$pagina = $this->load_page("app/vista/pediatria.html");
			$html = $this->load_page("app/vista/modulos/pediatria/listapc.html");
			$pagina = $this->replace("/\#CONTENIDO\#/",$html,$pagina);
			$this->view_page($pagina);
		}
		public function pediatriapcomplejas(){
			$pagina = $this->load_page("app/vista/pediatria.html");
			$html = $this->load_page("app/vista/modulos/pediatria/listapcomplejas.html");
			$pagina = $this->replace("/\#CONTENIDO\#/",$html,$pagina);
			$this->view_page($pagina);
		}

		//LEXICON
		public function lexicon(){
			$pagina = $this->load_page("app/vista/lexicon.html");
			$this->view_page($pagina);
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
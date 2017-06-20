<?php
	
	/**
	 *	Classe extend Controller, na qual é o controlador base 
	 * */
	class homeController extends controller{

		public function index(){

			$fotos = new fotos();
			$dados['fotos'] = $fotos->getFotos();

			$this->loadTemplate('home', $dados);
		}

		public function sobre(){

			$this->loadTemplate('sobre', $dados);
		}
		
	}
?>
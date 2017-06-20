<?php
	
	/**
	 *	Classe extend Controller, na qual é o controlador base 
	 * */
	class homeController extends controller{

		public function index(){

			$usuario = new usuario();
			$usuario->setName('Victor');

			$dados = array(
				'name' => $usuario->getName()
			);

			$this->loadTemplate('home', $dados);
		}

		public function sobre(){

			$this->loadTemplate('sobre', $dados);
		}
		
	}
?>
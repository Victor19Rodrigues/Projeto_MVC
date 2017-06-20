<?php
	class postsController extends controller{

		public function index(){
			echo 'Lista das postagens';
		}

		public function ver($nome, $sobrenome){
			echo 'Nome: '.$nome.'<br>Sobrenome: '.$sobrenome;
		}
	}
?>
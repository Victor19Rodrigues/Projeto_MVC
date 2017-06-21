<?php
	class fotos extends model{

		/*public function __construct(){

			//roda o construtor de model
			//parent ele volta para o herdeiro, ou seja, roda o 
			//o construtor de model
			parrent::__construct();
		}*/

		public function getFotos(){

			$array = array();

			$sql = "SELECT * FROM fotos";
			$sql = $this->db->query($sql);

			if($sql->rowCount() > 0){
				$array = $sql->fetchAll();
			}

			return $array;

		}


	}
?>
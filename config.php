<?php
	require 'environment.php';

	global $config; //ela será usada em todo o sistema
	$config = array();

	if(ENVIRONMENT == "development"){
		$config['dbname'] = "user";
		$config['host'] = "localhost";
		$config['dbuser'] = "root";
		$config['dbpass'] = "bel120508";
	}else{
		$config['dbname'] = "user";
		$config['host'] = "localhost";
		$config['dbuser'] = "root";
		$config['dbpass'] = "bel120508";
	}
?>
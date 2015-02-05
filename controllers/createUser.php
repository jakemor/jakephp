<?php
	
	$user = new User(); 
		$user->username = $_GET[0]; 
		$user->password = $_GET[1]; 
		$user->create(); 

?>
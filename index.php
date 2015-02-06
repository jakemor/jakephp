<?php
	
	// check for debuging mode

	require 'settings.php'; 
	if ($error_reporting) {
		ini_set('display_errors',1);  error_reporting(E_ALL);
	}

	// only experts edit below

	require 'models.php';
	require 'controllers.php';

	if (isset($_GET['args']) && $_GET['args'] != "") {
		$args = explode( '/', $_GET['args']);
		if (function_exists($args[0])) {
			$controller = $args[0]; 
			unset($args[0]);
			if (sizeof($args) > 0) {
				if ($args[sizeof($args)] == "") {
					unset($args[sizeof($args)]);
				}
			}
			$_GET = array_values($args);
			$controller(); 
		} else {
			$notfound_view_controller(); 
		}
	} else {
		$default_view_controller(); 
	}
	exit;
?>
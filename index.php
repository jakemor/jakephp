<?php
	
	// check for debuging mode

	require 'settings.php'; 
	if ($error_reporting) {
		ini_set('display_errors',1);  error_reporting(E_ALL);
	}

	// only experts edit below

	require 'app/models.php';
	require 'app/controllers.php';

	if (isset($_GET['args']) && $_GET['args'] != "") {
		$args = explode( '/', $_GET['args']);
		if (function_exists($args[0]) && "_" != substr($args[0], 0,1)) {
			$controller = $args[0]; 
			unset($args[0]);
			if (sizeof($args) > 0) {
				if ($args[sizeof($args)] == "") {
					unset($args[sizeof($args)]);
				}
			}
			$_GET = array_values($args);
			_everypage();
			$controller();
		} else {
			_everypage();
			$notfound_view_controller(); 
		}
	} else {
		_everypage();
		$default_view_controller(); 
	}
	exit;
?>
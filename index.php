<?php
	require 'models.php';
	include 'settings.php'; 

	if ($error_reporting) {
		ini_set('display_errors',1);  error_reporting(E_ALL);
	}

	if (isset($_GET['args']) && $_GET['args'] != "") {
		$args = explode( '/', $_GET['args']);
		if (is_file('views/' . $args[0] . '.php')) {
			$page = $args[0];
			unset($args[0]);
			if ($args[sizeof($args)] == "") {
				unset($args[sizeof($args)]);
			}
			$_GET = array_values($args);
			include('views/' . $page . '.php');
		} else {
			include('views/notfound.php');
		}
	} else {
		include('views/home.php');
	}
	exit;
?>

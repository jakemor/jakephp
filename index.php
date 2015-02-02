<?php
	require 'models.php';
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

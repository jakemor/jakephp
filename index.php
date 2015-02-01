<?php
	require 'models.php';
	if (isset($_GET['args']) && $_GET['args'] != "") {
		$args = explode( '/', $_GET['args']);
		if (is_file('pages/' . $args[0] . '.php')) {
			$page = $args[0];
			unset($args[0]);
			if ($args[sizeof($args)] == "") {
				unset($args[sizeof($args)]);
			}
			$_GET = array_values($args);
			include('pages/' . $page . '.php');
		} else {
			include('pages/notfound.php');
		}
	} else {
		include('pages/home.php');
	}

	exit;
?>

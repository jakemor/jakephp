<?php include("templates/header.php"); ?>

<?php
	
	$user = new User();

	$results = $user->read("username", $_GET[0]);

	if (sizeof($results) == 0) {
		$user->username = $_GET[0]; 
		$user->password = $_GET[1]; 
		if ($user->create()) {
			echo "<p>User Created</p>";
		} else {
			echo "<p>Error: User Not Created</p>";
		}
	} else {
		echo "<p>User Exists!</p>";
	}

		


?>

<a href="/jakephp/contactus"> contact us <a>

<?php include("templates/footer.php");?>

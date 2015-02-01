<?php include("templates/header.php"); ?>

<?php
	
	$person = new Person();
		$person->username = "jake";
	$person->save();

?>

<a href="/jakephp/contactus"> contact us <a>

<?php include("templates/footer.php");?>

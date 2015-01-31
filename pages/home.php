<?php include("templates/header.php");?>

<?php
for ($i=0; $i < sizeof($_GET); $i++) { 
	echo "<p>" . $_GET[$i] . "<p>";
	echo "<br>";
}
?>

<a href="/jakephp/contactus"> contact us <a>

<?php include("templates/footer.php");?>

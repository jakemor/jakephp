<?php include("templates/header.php"); ?>

<?php
	
	$friends = new Friends();
		$friends->user1 = "hey"; 
		$friends->user2 = "zach"; 
		$friends->create(); 

	$friends = new Friends();
		$result = $friends->read("user2", "zach"); 

	for ($i=0; $i < sizeof($result); $i++) { 
		echo $result[$i]["user1"] . "<br>";
	}

?>

<a href="/jakephp/contactus"> contact us <a>

<?php include("templates/footer.php");?>

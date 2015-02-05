<?php include("header.php"); ?>

<?php

		$user = new User();
		
		if ($user->filter("username", $_GET[0])) {
			if ($user->filter("username", $_GET[1])) {
				$friend = new Friend(); 
					$friend->user1 = $_GET[0]; 
					$friend->user2 = $_GET[1];
					$friend->save(); 
				echo "<br>friended<br>"; 
			} else {
				echo "<br>no user 2<br>"; 
			}
		} else {
			echo "<br>no user 1<br>"; 
		}

?>

<a href="/jakephp/contactus"> contact us <a>

<?php include("footer.php");?>

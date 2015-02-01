# jakephp

## Goal: A lightweight, web framework for use at hackathons. 
### Implementation
1) define models in models.php

	class User extends ModelBuilder {
		public $username;
		public $password;
		public $createdAt;
	}


2) create pages + forms in /pages

	<form action="home" method="post">
		New Username: <input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit">
	</form>

	$user = new User();
	$user->usename = $_POST["username"];
	$user->password = $_POST["password"];
	$user->save();
# jakephp

## Goal: A lightweight web framework that values simplicity. 
### Implementation
1) define models in models.php

	class User extends ModelBuilder {
		public $username;
		public $password;
		public $createdAt;
	}

	// inherited methods:
	
	// $user->create() : creates an object of type User
	// returns TRUE or FALSE
		$user->username = "jakemor"; 
		$user->password = "jakephp";
		$user->create();

	// $user->get() : populates $user with the first user found w/ the key,value pair provided 
	// returns TRUE or FALSE
		$user->get("username", "jakemor"); 

	// $user->update() : updates the database with new fields
	// returns TRUE or FALSE
		if ($user->get("username", "jakemor")) {
			$user->password = "newpass";
			$user->update();
		}
	
	// $user->delete() : deletes $user from the databse
	// returns TRUE or FALSE
		if ($user->get("username", "jakemor")) {
			$user->delete();
		}

	// $user->exists() : returns TRUE if a user exists with the key,value pair provided
	// returns TRUE or FALSE
		if ($user->exists("username", "jakemor")) {
			echo "user exists";
		} else {
			echo "aint no user with those credentials";
		}


2) [C]RUD:	create pages & forms in /pages

	// pages/login.php
	<form action="home" method="post">
		New Username: <input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit">
	</form>

	// pages/home.php
	$user = new User();
	if (!$user->exists("username", $_POST["username"])) { 
		$user->usename = $_POST["username"];
		$user->password = $_POST["password"];
		$user->cookie("username", time()+3600); // expire in 1 hour. 
		if ($user->create()) {
			echo "user created"; 
		} else {
			echo "user creation failed";
		}
	} else {
		echo "user already exists"; 
	}

3) C[R]UD:	show info from database

	$user = new User();
	if ($user->get("username", $_COOKIE["username"])) {
		echo 'Username: ' . $user->username; 
	}

4) CR[U]D:	update database

	$user = new User();
	if ($user->get("username", $_COOKIE["username"])) {
		$user->password = $_POST["new_pass"];
		$user->update(); 
	}

5) CRU[D]:	delete from database

	$user = new User();
	if ($user->get("username", $_COOKIE["username"])) {
		$user->delete(); 
	}
	






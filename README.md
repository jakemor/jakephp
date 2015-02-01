# jakephp

Goal: A lightweight, web framework for use at hackathons. 
Implementation: 
1) define models in models.php

	class User extends ModelBuilder {
		public $username;
		public $password;
		public $createdAt;
	}

2) create pages + forms in /pages

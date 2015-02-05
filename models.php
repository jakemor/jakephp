<?php

require 'model/ModelBuilder.php';

class User extends ModelBuilder {
	public $username;
	public $password; 
}

class Friend extends ModelBuilder {
	public $user1;
	public $user2; 
}

?>
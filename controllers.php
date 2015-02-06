<?php

// must include
function home() {

	$friend = new Friend(); 
	$friend->user1 = "lol"; 
	$friend->user2 = "hi"; 
	$friend->user3 = "ho"; 
	$friend->save(); 

	include("views/home.html"); 
}

// must include
function notfound() {
	include("views/notfound.html"); 
}

?>
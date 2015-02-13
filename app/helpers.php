<?php

/*
	HELPER FUNCTIONS - Add as you need
*/

function _print($string) {
	echo "<p> {$string} </p>"; 
}

function _goto($page) {
	header("Location: /jakephp/{$page}"); 
	exit; 
}

function _hash($string) {
	return hash('sha256', $string);
}

function _showCookies() {

	echo '<table border="1" style="width:40%">';
	foreach ($_COOKIE as $key => $value) {
		echo "<tr>"; 
		echo "<td>{$key}</td> <td>{$value}</td>";
		echo "</tr>"; 
	}
	echo '</table>'; 


}

function _showArray($array) {

	echo '<table border="1" style="width:40%">';
	foreach ($array as $key => $value) {
		echo "<tr>"; 
		echo "<td>{$key}</td> <td>{$value}</td>";
		echo "</tr>"; 
	}
	echo '</table>'; 


}

?>
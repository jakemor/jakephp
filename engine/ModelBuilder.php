<?php

class ModelBuilder {
	public function __construct() {
		echo "<br>". get_class($this) . " = ";
		$cols = array_keys(get_class_vars(get_class($this)));
		foreach ($cols as $col) {
			echo $col . ", ";
		}
	}

	public function save() {
		foreach ($this as $key => $value) {
			echo ("<br>" . $key . " = " . $value . "<br>");
		}
	}

	// create

	// read
	
	// update

	// delete

}

?>
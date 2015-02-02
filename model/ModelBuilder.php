<?php

class ModelBuilder {

	public function __construct() {
		$db = new SQLite3('database.db');
		$table_name = get_class($this);
		$cols_array = array_keys(get_class_vars(get_class($this)));
		$cols = implode(",", $cols_array);
		$db->exec(
			'CREATE TABLE ' . $table_name . '(' . $cols . ');'
		);
	}

	// create()
	public function create() {
		$db = new SQLite3('database.db');
		$table_name = get_class($this);
		
		$cols_array = array(); 
		$vals_array = array(); 
		
		foreach ($this as $key => $value) {
			array_push($cols_array, $key); 
			array_push($vals_array, $value); 
		}

		$cols = '"' . implode('", "', $cols_array) . '"';
		$vals = "'" . implode("', '", $vals_array) . "'";
		
		$db->exec(
			'CREATE TABLE ' . $table_name . '(' . $cols . ');'
		);

		return $db->exec(
			"INSERT INTO \"" . $table_name . "\" (" . $cols . ") VALUES (" . $vals . "); "
  		);
	}

	// get(key, value)
	public function get($key, $value) {
		$db = new SQLite3('database.db');
		$table_name = get_class($this);

		$query = "SELECT * FROM \"" . $table_name . "\" WHERE \"" . $key . "\" = '" . $value . "'";
		
		$result = $db->query($query);

		$found = FALSE; 
		
		while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
			$found = TRUE; 
		    foreach ($row as $key => $value) {
		    	$this->$key = $value; 
		    }
		}

		return $found; 
	}

	public function read($key, $value) {
		$db = new SQLite3('database.db');
		$table_name = get_class($this);

		$query = "SELECT * FROM \"" . $table_name . "\" WHERE \"" . $key . "\" = '" . $value . "'";

		$result = $db->query($query);
		$return = array();

		while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
		    $db_row = array(); 
		    foreach ($row as $key => $value) {
		    	$db_row[$key] = $value; 
		    }
		    array_push($return, $db_row); 
		}

		if (sizeof($return > 0)) {
			return $return; 
		} else {
			return FALSE; 
		}

		
	}


	// update()

	// delete()

}

?>
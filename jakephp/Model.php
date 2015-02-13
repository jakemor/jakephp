<?php

// Only edit this if you know what your doing!

class Model {

	public function __construct() {
		$db = new SQLite3('database.db');
		chmod("database.db", 0777);
		$table_name = get_class($this);
		$cols_array = array_keys(get_class_vars(get_class($this)));
		$cols = implode(",", $cols_array);
		$cols = "id INTEGER PRIMARY KEY, " . $cols; 
		$db->exec(
			'CREATE TABLE IF NOT EXISTS ' . $table_name . '(' . $cols . ');'
		);
	}

	// create()
	public function save() {
		$db = new SQLite3('database.db');
		$table_name = get_class($this);
		
		if (!property_exists($this, "id")) {
			$cols_array = array(); 
			$vals_array = array(); 
			
			foreach ($this as $key => $value) {
				array_push($cols_array, $key); 
				array_push($vals_array, $value); 
			}

			$cols = '"' . implode('", "', $cols_array) . '"';
			$vals = "'" . implode("', '", $vals_array) . "'";
			
			$db->exec(
				'CREATE TABLE IF NOT EXISTS ' . $table_name . '(' . $cols . ');'
			);

			$db->exec(
				"INSERT INTO \"" . $table_name . "\" (" . $cols . ") VALUES (" . $vals . "); "
	  		);
		} else {
			$rows = 0; 
			$updated = 0; 
			foreach ($this as $key => $value) {
				if ($db->exec(
					'UPDATE ' . $table_name . ' SET ' . $key . '="' . $value . '" WHERE id="' . $this->id . '";'
				)) {
					$updated++; 
				}
				$rows++; 
			}
			return $rows==$updated; 
		}
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

	// returns an array
	public function search($key, $value) {
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

		return $return; 
	}

	// returns an array
	public function getAll() {
		$db = new SQLite3('database.db');
		$table_name = get_class($this);

		$query = "SELECT * FROM \"" . $table_name . "\"";

		$result = $db->query($query);
		$return = array();

		while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
		    $db_row = array(); 
		    foreach ($row as $key => $value) {
		    	$db_row[$key] = $value; 
		    }
		    array_push($return, $db_row); 
		}

		return $return; 
	}

	// delete()
	public function delete() {
		if (property_exists($this, "id")) {
			$db = new SQLite3('database.db');
			$table_name = get_class($this);
			$query = 'DELETE FROM "' . $table_name . '" WHERE ("id" = ' . $this->id . ');'; 
			return $db->exec($query); 
		} else {
			return FALSE; 
		}
	}
}

?>
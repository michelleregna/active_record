<?php

class htmlTable extends page {
	public static function buildTable($array) {
	
		// Start table
		$table = "<table>";
		// Table headers
		$table .= "<tr>";
		foreach ($array[0] as $key => $value) {
			$table .= "<th>" . htmlspecialchars($key) . "</th>";
		}

		$table .= "</tr>";
		
		// Table data
        foreach ($array as $key => $value) {
     		$table .= "<tr>";
     		
     		foreach ($value as $key => $cell) {
     			 $table .= "<td>" . htmlspecialchars($cell) . "</td>";
     		}
     		$table .= "</tr>\n";
		}

		$table .= "</table><br>";
		return $table;

	}

	public static function buildTableWithOneRecord($record) {
		// Start table
		$table = "<table>";
		// Table headers
		$table .= "<tr>";
		foreach ($record as $key => $value) {
			$table .= "<th>" . htmlspecialchars($key) . "</th>";
		}

		$table .= "</tr>";

		// Record data
        foreach ($record as $value) {
  			$table .= "<td>" . htmlspecialchars($value) . "</td>";
     	}
     	
     	$table .= "</tr>\n";
		$table .= "</table><br>";
		return $table;
	}
}

?>
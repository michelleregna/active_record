<?php

class htmlTable {
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

		$table .= "</table>";
		return $table;
	}
}

?>
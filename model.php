<?php

class model {
	protected $tableName;
	public function save() {
		if ($this->id = '') {
            $sql = $this->insert();
        } else {
            $sql = $this->update();
        }

        $db = dbConn::getConnection();
        $statement = $db->prepare($sql);
        $statement->execute();
        // $tableName = get_called_class();
        // $array = get_object_vars($this);
        // $columnString = implode(',', $array);
        // $valueString = ":".implode(',:', $array);
        // echo "INSERT INTO $tableName (" . $columnString . ") VALUES (" . $valueString . ")</br>";
        // echo 'I just saved record: ' . $this->id;

	}

	private function insert() {
		$sql = "INSERT INTO $tableName (" . $columnString . ") VALUES (" . $valueString . ")</br>";
        return $sql;
        echo 'I just inserted record' . $this->id;


	}

	private function update() {
		$sql = "UPDATE $tableName SET WHERE";
        return $sql;
        echo 'I just updated record' . $this->id;

	}

	public function delete($tableName, $id) {
        
        $db = dbConn::getConnection();
        $sql = "DELETE FROM $tableName WHERE user_id=" . $this->$id;
        $statement = $db->prepare($sql);
        $statement->execute();

		echo 'I just deleted record' . $this->id;


	}
}

?>

<?php

class model {
	protected $tableName;
	public function save() {
		if ($this->id = '') {
            $sql = $this->insert();
        } else {
            $sql = $this->update();
        }

        // $db = dbConn::getConnection();
        // $statement = $db->prepare($sql);
        // $statement->execute();
        // $tableName = get_called_class();
        // $array = get_object_vars($this);
        // $columnString = implode(',', $array);
        // $valueString = ":".implode(',:', $array);
        // echo "INSERT INTO $tableName (" . $columnString . ") VALUES (" . $valueString . ")</br>";
        // echo 'I just saved record: ' . $this->id;

	}

	private function insert() {
		$sql = 'sometthing';
        return $sql;

	}

	private function update() {
		$sql = 'sometthing';
        return $sql;
        echo 'I just updated record' . $this->id;

	}

	public function delete($tableName, $id) {
        $sql = "DELETE FROM $tableName WHERE user_id=" .$id;
        $db = dbConn::getConnection();
        $statement = $db->prepare($sql);
        $statement->execute();

		echo 'I just deleted record' . $this->id;


	}
}

?>

<!-- $query = 'SELECT * FROM accounts WHERE id < 6';
$statement = $db->prepare($query);
$statement->execute();
$accounts = $statement->fetchAll();
$statement->closeCursor();
$num_of_accounts = $statement->rowCount();
echo "Number of records in result: $num_of_accounts"; -->

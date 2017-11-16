<?php

class model {
	protected $tableName;
	// public function save() {
	// 	if ($this->id = '') {
 //            $sql = $this->insert();
 //        } else {
 //            $sql = $this->update();
 //        }


     


        // this gets the column names and separates them with a comma so they can be used in the INSERT query
      
        // echo "INSERT INTO $tableName (" . $columnString . ") VALUES (" . $valueString . ")</br>";
        // echo 'I just saved record: ' . $this->id;

	// }

    // don't you need to pass this values? it already has the column names with $columnString 
	public function insert() {

        $db = database::getConnection();
        // $array = get_object_vars($this);
        // $columnString = implode(',', $array);
        // $valueString = ":".implode(',:', $array);
        $tableName = get_called_class();
        // 

        // foreach($array) as $key => $value) {
        //     $statement->bindValues(":value", $this->$value);

                $keys = "";
                $values = "";
                $objVars = get_object_vars($this);
                foreach($objVars as $key=>$value) {
                    if($key == "id" || $key == "table") {
                        continue;
                    }

                    $keys .= $this->$key;
                    $values .= $this->$value;
                }

                $columnString = substr($keys, 0, -1);
                $valueString =  substr($values, 0, -1);
                $sql = "INSERT INTO $tableName (" . $columnString . ") VALUES (" . $valueString . ")</br>";
                $statement = $db->prepare($sql);
                $statement->execute();
    }
       
       
	
        // return $sql;

	private function update() {
		// $sql = "UPDATE $tableName SET WHERE";
  //       return $sql;
        echo 'hi';
      

	}

	public function delete($tableName, $id) {
        
        $db = database::getConnection();
        $sql = "DELETE FROM $tableName WHERE id=" . $id;
        $statement = $db->prepare($sql);
        $statement->execute();


	}
}

?>

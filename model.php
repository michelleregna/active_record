<?php

class model {
	protected $tableName;


public function save_account($id = null, $email, $fname, $lname, $phone, $birthday, $gender, $password) {

    if ($id) {
        $sql = 'UPDATE accounts SET email = ?, fname = ?, lname = ?, phone = ?, birthday = ?, gender = ?, password = ? WHERE id = ?';
    } else {
        $sql = 'INSERT INTO accounts(email, fname, lname, phone, birthday, gender, password) VALUES(?, ?, ?, ?, ?, ?, ?)';
    }

    $db = database::getConnection();
    $results = $db->prepare($sql);
    $results->bindValue(1, $email, PDO::PARAM_STR);
    $results->bindValue(2, $fname, PDO::PARAM_STR);
    $results->bindValue(3, $lname, PDO::PARAM_STR);
    $results->bindValue(4, $phone, PDO::PARAM_STR);
    $results->bindValue(5, $birthday, PDO::PARAM_STR);
    $results->bindValue(6, $gender, PDO::PARAM_STR);
    $results->bindValue(7, $password, PDO::PARAM_STR);

    if ($id) {
            $results->bindValue(8, $id, PDO::PARAM_INT);
        }

    $results->execute();

}

public function delete($tableName, $id) {
        
        $db = database::getConnection();
        $sql = "DELETE FROM $tableName WHERE id=" . $id;
        $statement = $db->prepare($sql);
        $statement->execute();


	}
}

?>

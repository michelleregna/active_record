
<?php

class database{
    //variable to hold connection object.
    protected static $db;
    //private construct - class cannot be instatiated externally.
    private function __construct() {
        try {
            // assign PDO object to db variable
            self::$db = new PDO('mysql:host=sql1.njit.edu;dbname=mcr35', 'mcr35', 'diehard53');
            self::$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        }
        catch (PDOException $e) {
            //Output error - would normally log this to error file rather than output to user.
            echo "Connection Error: " . $e->getMessage();
        }
    }
    // get connection function. Static method - accessible without instantiation
    public static function getConnection() {
        //Guarantees single instance, if no connection object exists then create one.
        if (!self::$db) {
            //new connection object.
            new database();
        }
        //return connection.
        return self::$db;
    }
}

// ini_set('display_errors', 'On');

// $dsn = 'mysql:host=sql1.njit.edu;dbname=mcr35';
// $username = 'mcr35';
// $pw = 'diehard53';


?>

<?php 

ini_set('display_errors', 'On');
error_reporting(E_ALL);


//Autuloader class
class Manage {
    public static function autoload($class) {
        //you can put any file name or directory here
        include $class . '.php';
    }
}
spl_autoload_register(array('Manage', 'autoload'));

$obj = new main();

class main {
	public function __construct() {
	
		// protected $html;
	
		// Call static methods 
		// $records = accounts::findAll();
		// echo'<pre>';
		// print_r($records);
		// echo '</pre>';

		// $records = todos::findOne(3);
		// echo '<pre>';
		// print_r($records);
		// echo '</pre>';
		// $html .= '<h1>Todos/h1>';

		// select all
		// $html .= '<h2>Select All</h2>';
		$records = accounts::findAll();
		echo htmlTable::buildTable($records);

		// select one record
		// $html .= '<h2>Select All</h2>';
		$record = accounts::findOne(8);
		echo htmlTable::buildTableWithOneRecord($record);

	}

	public function __destruct() {
	}

}


// $account = new account();
// $account->load('1');

// echo $account;

// echo 'hello';



// this would be the method to put in the index page for accounts
// $records = accounts::findAll();
//print_r($records);
// this would be the method to put in the index page for todos
// $records = todos::findAll();
//print_r($records);
//this code is used to get one record and is used for showing one record or updating one record
// $record = todos::findOne(1);
//print_r($record);
//this is used to save the record or update it (if you kndow how to make update work and insert)
// $record->save();
//$record = accounts::findOne(1);
//This is how you would save a new todo item
// $record = new todo();
// $record->message = 'some task';
// $record->isdone = 0;
//$record->save();
// print_r($record);
// $record = todos::create();
// print_r($record);


?>
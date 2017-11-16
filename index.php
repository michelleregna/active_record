
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
		$record = accounts::findOne(13);
		echo htmlTable::buildTableWithOneRecord($record);

		// delete a record
		// $html .= '<h2>Delete Record</h2>'
		$record->delete('accounts', 10);
		$records = accounts::findAll();
		echo htmlTable::buildTable($records); 

		// // insert a record
		// // $html .= '<h2>Insert Record</h2>'
		// $record = new account();
		// $record->id=15;
		// $record->email='finn@aol.com';
		// $record->fname='Finnegan';
		// $record->lname='Regna';
		// $record->birthday=10242010;
		// $record->gender='Male';
		// $record->password='woof';
		// $record->insert();
		// $records = accounts::findAll();
		// echo htmlTable::buildTable($records);

		// select all todo records
		// $html .= '<h2>Select All</h2>';
		$records = todos::findAll();
		echo htmlTable::buildTable($records);

		// select one todo record
		// $html .= '<h2>Select All</h2>';
		$record = todos::findOne(4);
		echo htmlTable::buildTableWithOneRecord($record);

		// delete a record
		// $html .= '<h2>Delete Record</h2>'
		$record->delete('todos', 5);
		$records = todos::findAll();
		echo htmlTable::buildTable($records); 


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
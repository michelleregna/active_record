
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

		// Set default page request
		$pageRequest = 'uploadForm';
		// Check for parameters in URL
		if(isset($_REQUEST['page'])) {
			// Load the page being requested into pageRequest
			$pageRequest = $_REQUEST['page'];
		}
		// Instantiate the class being requested
		$page = new $pageRequest;
		if($_SERVER['REQUEST_METHOD'] == 'GET') {
			$page->get();
		} else {
			$page->post();
		}
	
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
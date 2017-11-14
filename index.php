
<?php 

ini_set('display_errors', 'On');
error_reporting(E_ALL);

include('database.php');
include('model.php');
include('account.php');
include('todo.php');
include('collection.php');
include('accounts.php');
include('todos.php');


$records = accounts::findAll();
print_r($records);

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
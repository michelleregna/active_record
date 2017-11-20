
<?php
class start extends page {
	public function get() {
		// select all
		$this->html .= '<h2>Select All Accounts</h2>';
		$records = accounts::findAll();
		$this->html .= htmlTable::buildTable($records);

		// select one record
		$this->html .= '<h2>Select One Account</h2>';
		$record = accounts::findOne(13);
		$this->html .= htmlTable::buildTableWithOneRecord($record);

		// delete a record
		$this->html .= '<h2>Delete Account 10</h2>';
		$record->delete('accounts', 10);
		$records = accounts::findAll();
		$this->html .= htmlTable::buildTable($records); 

		// insert a record
		$this->html .= '<h2>Insert Account Record</h2>';
		$record = new account();
		$record->save_account('','finn@aol.com', 'Finnegan', 'Regna', '7324078497', '10242010', 'male', 'woof');
		$records = accounts::findAll();
		$this->html .= htmlTable::buildTable($records);

		// update a record
		$this->html .= '<h2>Update Account Record 9</h2>';
		$record->save_account('9','test@gmail.com', 'this', 'is', 'a', 'test', 'test', 'test');
		$records = accounts::findAll();
		$this->html .= htmlTable::buildTable($records);

		// select all todo records
		$this->html .= '<h2>Select All Todos</h2>';
		$records = todos::findAll();
		$this->html .= htmlTable::buildTable($records);

		// select one todo record
		$this->html .= '<h2>Select One Todo</h2>';
		$record = todos::findOne(4);
		$this->html .= htmlTable::buildTableWithOneRecord($record);

		// delete a record
		$this->html .= '<h2>Delete Todo 5</h2>';
		$record->delete('todos', 5);
		$records = todos::findAll();
		$this->html .= htmlTable::buildTable($records); 

		//insert a todo
		$this->html .= '<h2>Insert Todo</h2>';
		$record = new todo();
		$record->save_todo('','finn@aol.com', 5, '112017', '111917', 'this is killing me', 0);
		$records = todos::findAll();
		$this->html .= htmlTable::buildTable($records);

		//update to do
		$this->html .= '<h2>Update Todo Record 7</h2>';
		$record->save_todo('7','mcr35@njit.edu', 10, 'sorry', '12400', 'this is bad', 0);
		$records = todos::findAll();
		$this->html .= htmlTable::buildTable($records);


		
	}

	public function __destruct() {
		stringFunctions::printThis($this->html);
	}
}

?>
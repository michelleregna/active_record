
<?php
class start extends page {
	public function get() {
				// select all
		$this->html .= '<h2>Select All</h2>';
		$records = accounts::findAll();
		echo htmlTable::buildTable($records);

		// select one record
		// $this->html .= '<h2>Select All</h2>';
		$record = accounts::findOne(13);
		echo htmlTable::buildTableWithOneRecord($record);

		// delete a record
		// $html .= '<h2>Delete Record</h2>'
		$record->delete('accounts', 10);
		$records = accounts::findAll();
		echo htmlTable::buildTable($records); 

		// insert a record
		// $html .= '<h2>Insert Record</h2>'
		$record = new account();
		$record->id=15;
		$record->email='finn@aol.com';
		$record->fname='Finnegan';
		$record->lname='Regna';
		$record->birthday=10242010;
		$record->gender='Male';
		$record->password='woof';
		echo "<h1>working</h1>";
		$record->save();
		$records = accounts::findAll();
		echo htmlTable::buildTable($records);

		// select all todo records
		// $this->html .= '<h2>Select All</h2>';
		$records = todos::findAll();
		echo htmlTable::buildTable($records);

		// select one todo record
		// $this->html .= '<h2>Select All</h2>';
		$record = todos::findOne(4);
		echo htmlTable::buildTableWithOneRecord($record);

		// delete a record
		// $this->html .= '<h2>Delete Record</h2>'
		$record->delete('todos', 5);
		$records = todos::findAll();
		echo htmlTable::buildTable($records); 


	
		
	}
}

?>
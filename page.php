<?php
abstract class page {
	public function __construct() {
		// Creates the heading on the webpage
		$this->html .= '<html>';
		$this->html .= '<link rel="stylesheet" href="style.css">';
		$this->html .= '<body>';
	}
	public function __destruct() {
		// Close out the HTML
		$this->html .= '</body></html>';
		stringFunctions::printThis($this->html);
	}
}

?>
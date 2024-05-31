<?php

class searchContr extends Search {
	
	private $title;
	private $author;
	
	public function __construct($title, $author) {
		$this->title = $title;
		$this->author = $author;
	}
	
	private function ifEmpty() {
		$result;
		if (empty($this->title) && empty($this->author)) {
			$result = False;
		} else {
			$result = True;
		}
		return $result;
	}
	
	public function searchCatalog() {
		if ($this->ifEmpty() == False) {
			header('Location: ../index.php?error=emptyinput');
			exit();
		}
		$table = $this->getItems($this->title, $this->author);
		$this->createResultsTable($table);
	}
}
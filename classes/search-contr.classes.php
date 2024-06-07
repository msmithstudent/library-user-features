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
			$result = True;
		} else {
			$result = False;
		}
		return $result;
	}

}
<?php

class Search extends Dbh {
	
	protected function getItems($title, $author) {
		$statement = $this->connect()->prepare('SELECT * FROM books WHERE Title = ? OR Author = ?;');
		
		if (! $statement->execute(array($title, $author))) {
			$statement = null;
			header('Location: ../index.php?error=stmtfailed');
			exit();
		}
		
		if ($statement->rowCount() == 0) {
			$statement = null;
			header('Location: ../index.php?error=booknotfound');
			exit();
		}
		
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);
		$responseArray = [];
		foreach ($results as $result) {
			$rowArray = [];
			$rowArray = Array($result["Title"], $result["Author"], $result["Year"], $result["Description"], "<img src=" . $result["Cover_Path"] . " height='300' width='200'>");
			array_push($responseArray, $rowArray);
		}

		$statement = null;

		return $responseArray;
	}
}
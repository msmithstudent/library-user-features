<?php

class Signup extends Dbh {
	
	protected function setUser($uid, $pwd, $cardNumber) {
		$statement = $this->connect()->prepare('INSERT INTO users (PatronID, User_UID, User_PWD, Card_Number) VALUES ((SELECT PatronID FROM patrons WHERE patrons.Card_Number = ?), ?, ?, ?);');
		
		$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
		
		if (! $statement->execute(array($cardNumber, $uid, $hashedPwd, $cardNumber))) {
			$statement = null;
			header('Location: ../index.php?error=stmtfailed');
			exit();
		}
		$statement = null;
	}
		

	protected function checkCard($cardNumber) {
		$statement = $this->connect()->prepare('SELECT patrons.Card_Number FROM patrons WHERE Card_Number = ?;');
		
		if(! $statement->execute(array($cardNumber))) {
			$statement = null;
			header('Location: ../index.php?error=stmtfailed');
			exit();
		}
		
		$resultCheck;
		if($statement->rowCount() != 1) {
			$resultCheck = False;
		} else {
			$resultCheck = True;
		}
		
		return $resultCheck;
	}
	
	protected function checkUser($uid) {
		$statement = $this->connect()->prepare('SELECT users.User_UID FROM users WHERE User_UID = ?;');
		
		if(! $statement->execute(array($uid))) {
			$statement = null;
			header('Location: ../index.php?error=stmtfailed');
			exit();
		}
		
		$resultCheck;
		if($statement->rowCount() > 0) {
			$resultCheck = False;
		} else {
			$resultCheck = True;
		}
		
		return $resultCheck;
	}

	protected function getUserID($uid) {
		$statement = $this->connect()->prepare('SELECT UserID FROM users WHERE User_UID = ?;');

		if(!$statement->execute(array($uid))) {
			$statement = null;
			header("Location: profile.php?error=statementfailed");
			exit();
		}

		if($statement->rowCount() == 0) {
			$statement = null;
			header("Location: profile.php?error=profilenotfound");
			exit();
		}

		$profileData = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $profileData;
	}
}
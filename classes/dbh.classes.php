<?php

class Dbh {
	protected function connect() {
		try {
			$username = 'root';
			$pwd = '';
			$dbh = new PDO('mysql:host=localhost;dbname=library', $username, $pwd);
			return $dbh;
		} catch(PDOException $e) {
			echo 'Connection Error: ' . $e->getMessage() . '<br/>';
			die();
		}
	}
}
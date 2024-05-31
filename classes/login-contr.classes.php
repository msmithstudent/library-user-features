<?php

class loginContr extends Login {
	
	private $uid;
	private $pwd;
	
	public function __construct($uid, $pwd) {
		$this->uid = $uid;
		$this->pwd = $pwd;
	}
	
	private function ifEmpty() {
		$result;
		if (empty($this->uid) || empty($this->pwd)) {
			$result = False;
		} else {
			$result = True;
		}
		return $result;
	}
	
	public function loginUser() {
		if ($this->ifEmpty() == False) {
			header('Location: ../index.php?error=emptyinput');
			exit();
		}
		$this->getUser($this->uid, $this->pwd);
	}
	
}
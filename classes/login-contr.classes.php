<?php

class loginContr extends Login {
	
	private $uid;
	private $pwd;
	
	public function __construct($uid, $pwd) {
		$this->uid = $uid;
		$this->pwd = $pwd;
	}

	public function loginUser() {
		if ($this->ifEmpty() == True) {
			header('Location: ../index.php?error=emptyinput');
			exit();
		}
		$this->getUser($this->uid, $this->pwd);
	}
	
	private function ifEmpty() {
		$result;
		if (empty($this->uid) || empty($this->pwd)) {
			$result = True;
		} else {
			$result = False;
		}
		return $result;
	}
	
}
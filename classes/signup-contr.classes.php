<?php

class signupContr extends Signup {
	private $uid;
	private $pwd;
	private $pwdConfirm;
	private $cardNumber;
	
	public function __construct($uid, $pwd, $pwdConfirm, $cardNumber) {
		$this->uid = $uid;
		$this->pwd = $pwd;
		$this->pwdConfirm = $pwdConfirm;
		$this->cardNumber = $cardNumber;
	}
	
	public function signupUser() {
		if ($this->ifEmpty() == True) {
			header('Location: ../index.php?error=emptyinput');
			exit();
		}
		if ($this->invalidUid() == False) {
			header('Location: ../index.php?error=username');
			exit();
		}
		if ($this->pwdMatch() == False) {
			header('Location: ../index.php?error=password');
			exit();
		}
		if ($this->uidMatch() == False) {
			header('Location: ../index.php?error=userexists');
			exit();
		}
		if ($this->cardMatch() == False) {
			header('Location: ../index.php?error=cardnotfound');
			exit();
		}
		$this->setUser($this->uid, $this->pwd, $this->cardNumber);
	}

	public function fetchUserID($uid) {
		$userID = $this->getUserID($uid);
		return $userID[0]['UserID'];
	}

	// Error handlers
	private function ifEmpty() {
		$result;
		if (empty($this->uid) || empty($this->pwd) || empty($this->pwdConfirm) 
			|| empty($this->cardNumber)) {
			$result = True;
		} else {
			$result = False;
		}
		return $result;
	}
	
	private function invalidUid() {
		$result;
		if (!preg_match('/^[a-zA-Z0-9]*$/', $this->uid)) {
			$result = False;
		} else {
			$result = True;
		}
		return $result;
	}
	
	private function pwdMatch() {
		$result;
		if ($this->pwd !== $this->pwdConfirm) {
			$result = False;
		} else {
			$result = True;
		}
		return $result;
	}
	
	private function uidMatch() {
		$result;
		if (! $this->checkUser($this->uid)) {
			$result = False;
		} else {
			$result = True;
		}
		return $result;
	}
	
	private function cardMatch() {
		$result;
		if (! $this->checkCard($this->cardNumber)) {
			$result = False;
		} else {
			$result = True;
		}
		return $result;
	}
}
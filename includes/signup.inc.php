<?php

if (isset($_POST['submit'])) {
	
	//get form data
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	$pwdConfirm = $_POST['pwdConfirm'];
	$cardNumber = $_POST['cardNumber'];
	
	//instantiate signupContr class
	include '../classes/dbh.classes.php';
	include '../classes/signup.classes.php';
	include '../classes/signup-contr.classes.php';
	$signup = new signupContr($uid, $pwd, $pwdConfirm, $cardNumber);
	
	//running error handlers and user signupcontr
	$signup->signupUser();
	
	//return to home page
	header('Location: ../index.php?error=none');
}

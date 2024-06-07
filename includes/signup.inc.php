<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	//get form data
	$uid = htmlspecialchars($_POST['uid'], ENT_QUOTES, 'UTF-8');
	$pwd = htmlspecialchars($_POST['pwd'], ENT_QUOTES, 'UTF-8');
	$pwdConfirm = htmlspecialchars($_POST['pwdConfirm'], ENT_QUOTES, 'UTF-8');
	$cardNumber = htmlspecialchars($_POST['cardNumber'], ENT_QUOTES, 'UTF-8');
	
	//instantiate signupContr class
	include '../classes/dbh.classes.php';
	include '../classes/signup.classes.php';
	include '../classes/signup-contr.classes.php';
	$signup = new signupContr($uid, $pwd, $pwdConfirm, $cardNumber);
	
	//running error handlers and user signup
	$signup->signupUser();

	$userID = $signup->fetchUserID($uid);

	//Instantiate ProfileInfoContr class
	include '../classes/profileinfo.classes.php';
	include '../classes/profileinfo-contr.classes.php';
	$profileInfo = new ProfileInfoContr($userID, $uid);
	$profileInfo->defaultProfileInfo();
	
	//return to home page
	header('Location: ../index.php?error=none');
}

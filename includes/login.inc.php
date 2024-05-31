<?php

if (isset($_POST['submit'])) {
	
	//get form data
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	
	//instantiate loginContr class
	include '../classes/dbh.classes.php';
	include '../classes/login.classes.php';
	include '../classes/login-contr.classes.php';
	$login = new loginContr($uid, $pwd);
	
	//running error handlers and user loginContr
	$login->loginUser();
	
	//return to home page
	header('Location: ../index.php?error=none');
}
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	//get form data
	$uid = htmlspecialchars($_POST['uid'], ENT_QUOTES, 'UTF-8');
	$pwd = htmlspecialchars($_POST['pwd'], ENT_QUOTES, 'UTF-8');
	
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
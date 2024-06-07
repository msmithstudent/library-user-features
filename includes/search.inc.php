<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	//get form data
	session_start();
	$_SESSION['Title'] = htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8');
	$_SESSION['Author'] = htmlspecialchars($_POST['author'], ENT_QUOTES, 'UTF-8');

	header("Location: ../results.php?error=none");
	
}
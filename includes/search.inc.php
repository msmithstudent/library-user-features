<?php

if (isset($_POST['submit'])) {
	
	//get form data
	$title = $_POST['title'];
	$author = $_POST['author'];
	
	//instantiate searchContr class
	include 'classes/dbh.classes.php';
	include 'classes/search.classes.php';
	include 'classes/search-contr.classes.php';
	
	$search = new searchContr($title, $author);
	
}
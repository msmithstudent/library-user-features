<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<header>
	<nav>
		<div>
			<h3>SEARCH</h3>
			<ul class="navbar">
				<li><a href="index.php">HOME</a></li>
				<li><a href="search.php">BROWSE CATALOG</a></li>
			</ul>
		</div>
		<ul class="member-navbar">
			<?php
				if (isset($_SESSION['userid'])) {
			?>
					<li><a href="#"><?= $_SESSION["useruid"]; ?></a></li>
					<li><a href="includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
			<?php
				} else {
			?>
					<li><a href="#">SIGN UP</a></li>
					<li><a href="#" class="header-login-a">LOGIN</a></li>
			<?php
				}
			?>
		</ul>
	</nav>
	<form action="results.php" method="post">
		<input type="text" name="title" placeholder="Title"><br>
		<input type="text" name="author" placeholder ="Author">
		<br>
		<button type="submit" name="submit">SEARCH</button>
	</form>
</header>
</body>
</html>
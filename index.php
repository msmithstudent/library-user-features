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
			<h3>LIBRARY</h3>
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
</header>

<section class="index-login">
	<div class="wrapper">
		<div class="index-login-signup">
			<h4>SIGN UP</h4>
			<p>Don't have an account yet? Sign up here!</p>
			<form action="includes/signup.inc.php" method="post">
				<input type="text" name="uid" placeholder="Username"><br>
				<input type="password" name="pwd" placeholder="Password"><br>
				<input type ="password" name="pwdConfirm" placeholder="Confirm Password"><br>
				<input type="text" name="cardNumber" placeholder ="Library Card Number">
				<br>
				<button type="submit" name="submit">SIGN UP</button>
			</form>
		</div>
		<div class="index-login-login">
			<h4>LOG IN</h4>
			<form action="includes/login.inc.php" method="post">
				<input type="text" name="uid" placeholder="Username"><br>
				<input type="password" name="pwd" placeholder="Password">
				<br>
				<button type="submit" name="submit">LOG IN</button>
			</form>
		</div>
	</div>
</section>

</body>
</html>
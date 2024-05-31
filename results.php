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
	<div>
		<h3>RESULTS</h3>
	</div>
	<ul class="navbar">
				<li><a href="../index.php">HOME</a></li>
				<li><a href="../search.php">BROWSE CATALOG</a></li>
			</ul>
		</div>
		<ul class="member-navbar">
			<?php
			
				include 'includes/search.inc.php';
				
				session_start();
				
				if (isset($_SESSION['userid'])) {
			?>
					<li><a href="#"><?= $_SESSION["useruid"]; ?></a></li>
					<li><a href="includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
			<?php
				} else {
			?>
					<li><a href="../index.php">SIGN UP</a></li>
					<li><a href="../index.php" class="header-login-a">LOGIN</a></li>
			<?php
				}
			?>
		</ul>
	</nav>
	<?php $search->searchCatalog(); ?>
</header>
</body>
</html>
<?php include_once 'header.php';?>

	
</header>
<div class="wrapper">
<form action="includes/search.inc.php" method="post">
		<input type="text" name="title" placeholder="Title"><br>
		<input type="text" name="author" placeholder ="Author">
		<br>
		<button type="submit" name="submit">SEARCH CATALOG</button>
	</form>
	<br><br>
<form action="includes/bookprofile.inc.php" method="post">
		<input type="text" name="title" placeholder="Title"><br>
		<input type="text" name="author" placeholder ="Author">
		<br>
		<button type="submit" name="submit">SEARCH BOOK REVIEWS</button>
	</form>
	<br><br>
<form action="includes/publicprofile.inc.php" method="post">
	<input type="text" name="username" placeholder="Username"><br>
	<button type="submit" name="submit">SEARCH USERS</button>
</form>
</div>
</body>
</html>
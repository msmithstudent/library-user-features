<?php include_once 'header.php';?>

	
</header>
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
</body>
</html>
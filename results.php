<?php

include_once 'header.php';

include "C:/xampp/htdocs/library/classes/dbh.classes.php";
include "C:/xampp/htdocs/library/classes/search.classes.php";
include "C:/xampp/htdocs/library/classes/search-view.classes.php";
$results = new SearchView();
$results->fetchResults($_SESSION['Title'], $_SESSION['Author']);

?>
</header>
</body>
</html>
<?php

session_start();
session_unset();
session_destroy();

//return to home page
header("Location: ../index.php?error=none");
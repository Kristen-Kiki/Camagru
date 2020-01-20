<?php

require '../config/database.php';

session_start();
session_unset();
session_destroy();
echo '&#128521 See you again soon!';
header("Location: ../index.php");

?> 
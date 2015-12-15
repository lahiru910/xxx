<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db     = "db_bus";

$conn   = mysqli_connect($dbhost, $dbuser, $dbpass);
mysqli_select_db($conn,$db);
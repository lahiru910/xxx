<?php
$dbhost = "mysql9.000webhost.com";
$dbuser = "a5839723_root";
$dbpass = "a5839723_bus_910";
$db     = "a5839723_bus";

$conn   = mysqli_connect($dbhost, $dbuser, $dbpass);
mysqli_select_db($conn,$db);
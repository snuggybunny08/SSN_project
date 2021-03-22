<?php
// ini_set("extension", "php_mysqli.dll");
$host= "localhost";
$unmae= "root";
$password = "";

$db_name = "social security number";
$conn = mysqli_connect($host, $unmae, $password, $db_name);
if (!$conn) {
	echo "Connection failed!";
}
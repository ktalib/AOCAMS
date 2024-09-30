<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$servername = 'localhost';
$username = 'root';
$password = "";
$db = 'cams';
$conn = mysqli_connect($servername, $username, $password,$db);

if (!$conn) {
	die("connection failed: " . mysqli_connect_error());

}



?>
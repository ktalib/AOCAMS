<?php

//Define your host here.
$hostname = "localhost";

//Define your database username here.
$username = "root";

//Define your database password here.
$password = "";

//Define your database name here.
$dbname = "cams";

// Establish connection to the database
$conn = mysqli_connect($hostname, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}

?>

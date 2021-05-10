<?php
$host = "localhost";
$db = "company";    // Database name
$user = "root"; // User
$pass = " "; // Password

// My PHP 5.5 method of connecting to the database
$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_errno) {
echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
exit();
}
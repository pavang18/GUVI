<?php
$servername = "localhost";  // Replace with your MySQL server hostname
$username = "root";         // Replace with your MySQL username
$password = "";             // Replace with your MySQL password
$dbname = "guvi";     // Replace with your MySQL database name

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

echo "Connected successfully!";
?>

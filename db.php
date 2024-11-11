<?php
// db.php

$host = "localhost";
$username = "root"; // replace with your DB username
$password = "";     // replace with your DB password
$dbname = "sk_brothers";

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

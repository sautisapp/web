<?php
// Database configuration
$db_host = "localhost"; // Change this to your database host
$db_username = "username"; // Change this to your database username
$db_password = "password"; // Change this to your database password
$db_name = "contact_form"; // Change this to your desired database name

// Create database connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

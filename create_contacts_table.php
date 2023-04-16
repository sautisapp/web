<?php
require_once "db_config.php"; // Include the database configuration file

// Validate and sanitize user input
$name = trim($_POST["name"]);
$telephone = trim($_POST["telephone"]);
$email = trim($_POST["email"]);
$message = trim($_POST["message"]);

// Validate name (should not be empty and should contain only letters and spaces)
if (empty($name) || !preg_match("/^[a-zA-Z ]+$/", $name)) {
    echo "Please enter a valid name";
    return;
}

// Validate telephone (should not be empty and should contain only digits and optional hyphens)
if (empty($telephone) || !preg_match("/^[0-9-]+$/", $telephone)) {
    echo "Please enter a valid telephone number";
    return;
}

// Validate email (should not be empty and should be a valid email address)
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Please enter a valid email address";
    return;
}

// Validate message (should not be empty)
if (empty($message)) {
    echo "Please enter a message";
    return;
}

// Sanitize user input to prevent SQL injection
$name = mysqli_real_escape_string($conn, $name);
$telephone = mysqli_real_escape_string($conn, $telephone);
$email = mysqli_real_escape_string($conn, $email);
$message = mysqli_real_escape_string($conn, $message);

// Further processing of form data, such as inserting into database, can be added here

// Close the database connection
$conn->close();
?>

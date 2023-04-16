<?php
// Server-side validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $telephone = $_POST["telephone"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  if (empty($name) || empty($telephone) || empty($email) || empty($message)) {
    echo "All fields are required";
    return;
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Please enter a valid email address";
    return;
  }

  // Further processing of form data, such as sending an email or saving to a database, can be added here

  echo "Form submitted successfully!";
}
?>

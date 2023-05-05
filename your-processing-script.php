<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $email = $_POST["email"];

  // Validate the form data
  if (empty($email)) {
    die("Please fill out all fields.");
  }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email address.");
  }

  // Configure the mail server settings
  $to = "recipient@example.com";
  $subject = "New message from $name";
  $headers = "From: $email";
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully.";
  } else {
    echo "Error sending message.";
  }
}
?>

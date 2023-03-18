<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Set the recipient email address
  $to = "alliehe2015@gmail.com";

  // Set the email subject
  $subject = "New message from $name";

  // Build the email body
  $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

  // Send the email
  mail($to, $subject, $body);

  // Redirect the user to a thank-you page
  header("Location: thankyou.html");
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Send the email (you need to configure the mail settings)
  // Here's a basic example using the mail() function
  $to = "nihadprakarsh@outlook.com";
  $subject = "New contact form submission";
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for your message. We'll get back to you soon!";
  } else {
    echo "Oops! Something went wrong. Please try again later.";
  }
}
?>

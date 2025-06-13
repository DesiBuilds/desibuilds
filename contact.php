<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  $to = "t.a.ny.ajantu.a.r@googlemail.com";  // Replace with your real email
  $subject = "New Message from DesiBuilds Website";
  $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "Thank You, Message sent successfully.";
  } else {
    echo "Something went wrong. Try again.";
  }
}
?>

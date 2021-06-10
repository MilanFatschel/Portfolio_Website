<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];


  $email_from = "Portfolio Email";
  $email_body = "Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Message: $message.\n";

  $email_to = "milan.fatschel@gmail.com";

  $headers = "From: $email_from \r\n";

  mail($email_to, $subject, $email_body, $headers);
?>
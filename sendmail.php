<?php
if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = 'sharmanghube@gmail.com'; // Add your email address here
  $subject = 'New Contact Message';
  $body = "From: $name\n E-Mail: $email\n Message:\n $message";
  $headers = "From: $email\n";
  $headers .= "Reply-To: $email\n";
  mail($to, $subject, $body, $headers);
  echo 'Message sent successfully.';
}
?>

<?php
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

$email_message = "
Name: ".$name."
Email: ".$email."
Message: ".$message."
";

$to = "luitel.nawaraj12300@gmail.com";
$subject = "New Message";
$headers = "From: " . $email . "\r\n" .
           "Reply-To: " . $email . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $email_message, $headers)) {
   header("Location: ../mail-success.html");
   exit();
} else {
   echo "There was a problem sending the email.";
}
?>

<?
$name = $_POST{'name'};
$email = $_POST{'email'};
$message = $_POST['message'];

$email_message = "

Name: ".$name."
Email: ".$email."
Message: ".$message."

";

mail ("luitel.nawaraj12300@gmail.com" , "New Message", $email_message);
header("location: ../mail-success.html ");
?>


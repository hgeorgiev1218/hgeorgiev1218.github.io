<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['phone_no']))
$phone_no = $_POST['phone_no'];

$content="From: $name \n Email: $email \n Message: $message";
$recipient = "hgeorgiev1218@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $phone_no, $content, $mailheader) or die("Error!");
echo "Вашето съобщение е изпратено!";
?>
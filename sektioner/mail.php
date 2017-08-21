<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$henvendelse = $_POST['henvendelse'];
$message = $_POST['message'];
$formcontent=" Fra: $name \n Nummer: $phone \n henvendelse: $henvendelse \n $message";
$recipient = "tim.s.h@hotmail.com";
$subject = "Kunde";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
?>
<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;


$mail->Username = "1821carpediem@gmail.com";
$mail->Password = "cowiutwofunzqfkg";


$mail->setFrom($email, $name);
$mail->addReplyTo($email, $name);
$mail->addAddress("1821carpediem@gmail.com");

$mail->Subject = $subject;
$mail->Body = $message;


$mail->send();

header("Location: emailSent.html");


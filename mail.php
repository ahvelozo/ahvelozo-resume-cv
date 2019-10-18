<?php

/* All form fields are automatically passed to the PHP script through the array $HTTP_POST_VARS. */

$name = $_POST['name'];
$email = $_POST['_replyto'];
$subject = $_POST['subject'];
$message = $_POST['message'];

require 'phpmailer/PHPMailer.php';


$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ahvelozo@gmail.com';                 // SMTP username
$mail->Password = 'Illuminator17*';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
$mail->Port = 465;
$mail->From = 'ahvelozo@gmail.com';
$mail->FromName = 'Hire me';    // Add a recipient
$mail->addAddress('ahvelozo@gmail.com');               // Name is optional

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body = $message;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>
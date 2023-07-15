<?php 

$name = $_Post['name'];
$visitor_email = $_POST['email'];
$phone = $_Post['phone'];
$message = $_Post['message'];

$email_message = "Received message from: ". $name. "\nPhone number: ". $phone . "\n" . $message;

$subject = "Photography Booking";
$to = "mact792@gmail.com";

$headers = "From: $visitor_email \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

$sent = mail($to, $subject, $email_message, $headers);

if ($sent) {
    include "/index2.php";
}

// Test Message: Hi, I would like to have a conversation regarding a booking for a big event.  

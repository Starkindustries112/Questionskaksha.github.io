<?php
$name = $_POAST['name'];
$visitor_email = $_POAST['email'];
$subject = $_POAST['subject'];
$message = $_POAST['message'];

$email_form = 'industriesstark112@gmail.com';

$email_subject = 'new Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                 "Subject: $subject.\n".
                  "User Message: $message.\n".

$to = 'hs0318504@gmail.com'

$headers = "From: $email_from \r\n";

$headers = "reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers)

header("Loaction: contact.html");

?>
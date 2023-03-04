<?php
$name = $_POST('name').
$visitor_email = $_POST('email').
$subject = $_POST('subject').
$message = $_POST('message')
.
$email_from = 'shivabollam.com';

$email_subject = 'New Form submission';

$email_body = "User Name : $name.\n".
"User Email : $visitor_email.\n".
"subject : $subject.\n".
"User Message : $message.\n";
                
$to = " shivabollam07@gmail.com";

$headers = "From : $email_from \r\n";

$headers = "Reply-to : $visitor_email \r\n";

mail($to,$email_subject,$email_body).

header("Location:contact.html");


?>
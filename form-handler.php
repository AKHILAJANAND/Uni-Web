<?php
$name = $POST['name'];
$visitor_email = $POST['email'];
$subject = $POST['subject'];
$message = $POST['message'];

$email_from = 'info@gmail.com';
$email_subject = 'new form submission';
$email_body = "User Name:$name.\n".
              "Email:$visitor_email.\n".
              "Subject:$subject.\n".
              "Message:$message.\n";
$to = 'akhila66@gmail.com';
$headers = "From:$email_from\r\n";
$headers.="Reply to:$visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html");















?>
<?php
$to = "janeebkonami@gmail.com";
$subject = "Test Email";
$message = "Hello, this is a test email from PHP!";
$headers = "From: jyothishmohann@gmail.com";

if(mail($to, $subject, $message, $headers)){
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>

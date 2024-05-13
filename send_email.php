<?php
// Get the form fields
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Email information
$to = "najilarfak202@gmail.com"; // Change this to your email address
$subject = "New Contact Form Submission";
$body = "Name: $name\nEmail: $email\nMessage:\n$message";

// Send email
$mail_sent = mail($to, $subject, $body);

// Check email sending status
if ($mail_sent) {
    echo json_encode(array('success' => true));
} else {
    echo json_encode(array('success' => false));
}
?>

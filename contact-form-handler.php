<?php
    $name = $_POST['name'];
    $visitor-email = $_POST['email'];
    $enquiry = $_POST['enquiry'];
    $message = $_POST['message'];


$email_from = 'valentinchurs25@gmail.com';

$email_subject = "New Form Submisssion";

$email_body = "User Name: $name.\n".
    "User Email: $visitor_email.\n".
    "User Enquiry: $enquiry.\n".
    "User Message: $message.\n";

$to = "valentinchurs25@gmail.com";

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");


?>
<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
    
    
    $mailTo = "info@webdeves.com";
    $headers = "From: ".$mailFrom;
    $txt   = "You have received an e-mail from ".$name.".\n\n"."Phone Number: ".$phone."\n\n"."Message: ".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    header("Location: thank-you.php?mailsend");
}

?>
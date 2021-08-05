<?php
$companyMail = ""; //company email goes here
$name = $email = $message =$headers ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = "Ayakha Security Reaction Services Contact Submission";
    $headers = "From: ".$email. "\r\n".
    
    mail($companyMail,"$subject",$message,$headers);
    header('Location: html/contact-thank-you.html');
    exit();
    
}
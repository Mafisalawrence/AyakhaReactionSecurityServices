<?php
$companyMail = "mafisalawerence@gmail.com"
$nameErr = $emailErr = $messageErr = "";
$name = $email = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = "Ayakha Security Reaction Services Contact Submission"
    $headers = "From: ".$email. "\r\n" .
   // mail($companyMail,"$subject",$message,$headers);

    echo "Name : ".$name."</br>";
    echo "Email : ".$email."</br>";
    echo "Message : ".$message."</br>";
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: " . $name . "\n Email: " . $email . "\n Message: ". $message;
$recipient = "brandoncolchin@gmail.com";
$subject = "Message From brandoncolchin.com!";
//$mailheader = "From: " . $email . "\r\n";
mail($recipient, $subject, $formcontent) or die("Error!");
header("Location: http://brandoncolchin.com/contact/thank-you");
echo "Thank You!" . " -" . "<a href='http://brandoncolchin.com/' style='text-decoration:none;color:#ff0099;'> Return Home</a>";

?>

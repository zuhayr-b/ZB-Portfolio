<?php
//create all variables from the contact form
$contactName = $_POST['name'];
$contactEmail = $_POST['email'];
$contactQuery = $_POST['query'];
//variables for the mail function
$to = "contact@zuhayr-b.co.uk";
$subject = "My Website Contacted by - $contactName";
$mailMessage = "You were contacted by $contactName\r\n\r\nTheir Email:    $contactEmail\r\nTheir query:\r\n\r\n$contactQuery\n";
$mailheader = "From: $contactEmail \r\n";
$subject2 = "Automatic Reply - Zuhayr | Freelance Web Designer "; //Sender recieves.
$message2 = "Hi $contactName,\r\n\r\nYour email has been received.\r\n\r\nYour Message:\n$contactQuery\r\n\r\nThanks for getting in touch, I aim to reply to all emails within 24 hours.";
$mailheader2 = "From: $to \r\n";
mail($to, $subject, $mailMessage, $mailheader);
mail($contactEmail, $subject2, $message2, $mailheader2); // recipient receives email confirmation
header('Location: http://www.zuhayr-b.co.uk/');
exit;
?>

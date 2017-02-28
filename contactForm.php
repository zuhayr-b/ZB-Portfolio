<?php
//create all variables from the contact form
$contactName = $_POST['name'];
$contactEmail = $_POST['email'];
$contactQuery = $_POST['query'];
//variables for the mail function
$to = "contact@zuhayr-b.co.uk";
$subject = "My Website Contacted by -  $contactName";
$mailMessage = "You were contacted by $contactName Their Email: $contactEmail\r\n Their query: $contactQuery\n";
$mailheader = "From: $contactEmail \r\n";
$subject2 = "Copy of your form submission"; //Sender recieves.
$message2 = "Hi thanks for getting in touch! I shall be in contact with you shortly.";
mail($to, $subject, $mailMessage, $mailheader);
// mail($contactEmail, $subject2, $message2, $mailheader2); // reciepient recieves email confirmation
header('Location: http://www.zuhayr-b.co.uk/');
exit;

?>

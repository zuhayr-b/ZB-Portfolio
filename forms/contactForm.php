<?php
  //create all variables from the contact form
  $contactName = $_POST['name'];
  $contactEmail = $_POST['email'];
  $contactQuery = $_POST['query'];

  //variables for the mail function
  $to = 'contact@zuhayr-b.co.uk';
  $subject = 'My Website Contacted by -  '.$contactName;
  $mailMessage = "You were contacted by ".$contactName."      Their Email: ".$contactEmail."\r\n
  About them: ".$contactDesc."\n
  Their query: ".$contactQuery."\n

  $headers = 'From: '.$contactEmail;

  mail($to,$subject,$mailMessage,$headers);
  header('Location:index.html');
  exit;

?>

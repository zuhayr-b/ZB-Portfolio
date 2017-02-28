<?php
if(isset($_POST['submit'])){
    $to = "contact@zuhayr-b.co.uk"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $subject = "Form submission"; //I recieve.
    $message= $_POST['query']; // senders message
    $subject2 = "Copy of your form submission"; //Sender recieves.
    $message2 = "Hi thanks for getting in touch! I shall be in contact with you shortly."; //Sender recieves.
    $headers = "New Form Submission From: " . $from; //I recieve.
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2); // sends a copy of the message to the sender
    header('Location: ../index.html');
    }
?>

<?php

$username = $_POST['username'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "rovicvillanueva15@gmail.com";
$subject = "Mail From Website";

$headers = "From:".$username. "\r\n". 
    "CC: rovicvillanueva15@gmail.com";

$txt = "You have recieved an e-mail from". $username. "\r\nEmail: " .$email. "\r\n
    Message: " . $message;


    if($email!=NULL){
        mail($to, $subject, $txt, $headers);
    }

    header('Location:emailsent.php');




?>
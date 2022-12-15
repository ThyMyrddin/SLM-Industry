<?php

$to = 'merizakhsm@gmail.com';
$name = $_POST['name'];
$from = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$header = "From: ". $name . " <" . $from . ">\r\n";
  
    
 
    mail($to, $subject, $message, $header);
    die('OK');

?>
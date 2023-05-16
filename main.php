<?php

$name=$_post['username'];
$email=$_post['email'];
$phone=$_post['phone'];
$to="barasinprecious@gmail.com"
$subject="mail from website"

$headers ="From:".$name. "\r\n" .
$txt ="you have recieved an e-mail from".$name ."\r\n$Email: ".$email."\r\n
    phone:".$phone;

if($email !=NULL){
    mail($to, $subject, $txt, $headers);
}

header('location:thank_.html')




?>
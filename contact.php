<?php

$name=$_POST['name'];
$subject=$_POST['subject'];
$from=$_POST['email'];
$email="jasem_ahmady@hotmail.com";
$message=$_POST["message"];

mail ($email, $subject, $message, "From: ".$from);
Print ("your message has been successfuly sent!");

?>
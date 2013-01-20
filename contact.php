<?php
$to = "skdangi@gmail.com";
$subject = "Contact Us";
$email = $_REQUEST['_u435701596183596421'] ;
$message = $_REQUEST['_u186529597906358540'] ;
$headers = "From: $email";
$sent = mail($to, $subject, $message, $headers) ;
if($sent)
{print "Your mail was sent successfully"; }
else
{print "We encountered an error sending your mail"; }
?>
<?php
require "vendor/autoload.php"; 
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
if(isset($_POST)){
 	
 	ob_start(); 
 	var_dump($_POST);
	           
 $content = ob_get_clean(); 
  $mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'secure.emailsrvr.com	';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'client_orders@liquifiedmedia.com';                 // SMTP username
	$mail->Password = 'L1qu1f13d';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;  
	$mail->setFrom('client_orders@liquifiedmedia.com', 'Mailer');
	$mail->addAddress('steven@liquifiedmedia.com');     //steven@liquifiedmedia.com sales@jarrettforcash.com   // Name is optional
	$mail->addReplyTo('steven@liquifiedmedia.com', 'Mailer');
	$mail->Subject = 'Sales Inquiry';
	$mail->Body    = $content;
 //$mail = mail("jon@liquifiedmedia.com", "emailin you a email", $content); 
	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    header('location:/?sent=1#contact');
	    echo 'Message has been sent';
	}
 // if($mail){
 // 	echo "<h1>Mail mailed</h1>"; 
 // 	var_dump($content); 
 // }else{
 // 	echo "<h1>Mail failed</h1>"; 
 // 	var_dump($content); 
 // }
		


?>
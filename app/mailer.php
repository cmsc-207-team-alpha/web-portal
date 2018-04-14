<?php
require 'PHPMailer-master/class.phpmailer.php';
require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();

$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "keflores@up.edu.ph";
//Password to use for SMTP authentication
$mail->Password = "squeespleen99";
//Set who the message is to be sent from
$mail->addAddress("$email");
$mail->setFrom('karloemilflores@gmail.com', 'Karlo Flores');
//Set an alternative reply-to address
//Set the subject line

$mail->Subject = "$subject";
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//Replace the plain text body with one created manually

$mail->Body = "$body";
//Attach an image file
$mail->setFrom('karloemilflores@gmail.com', 'CMSC207');
//Set an alternative reply-to address
$mail->addReplyTo('karloemilflores@gmail.com', 'CMSC207');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

/*

                             // set mailer to use SMTP
$mail->Host = "smtp2.gmail.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "karloemilflores@gmail.com";  // SMTP username
$mail->Password = "4476986b"; // SMTP password
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
$mail->From = "karloemilflores@gmail.com";
$mail->FromName = "Mailer";
$mail->AddAddress("$email");                  // name is optional

                              // set email format to HTML

$mail->Subject = "$subject";
$mail->Body    = "$body";


if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";


*/

?>

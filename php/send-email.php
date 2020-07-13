<?php
use PHPMailer\src\Exception;
use PHPMailer\src\PHPMailer;
 

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';


require 'vendor/autoload.php'; 

$mail = new PHPMailer(true); 
// Replace this with your own email address
$to = 'saramasa@syr.edu';

function url(){
  return sprintf(
    "%s://%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME']
  );
}

if($_POST) {
   try 
   {
   // New Set up
   $mail = PHPMailer()
   $mail->SMTPDebug = 2;                   // Enable verbose debug output
   $mail->isSMTP();                        // Set mailer to use SMTP
   $mail->Host       = 'smtp.googlemail.com';    // Specify main SMTP server
   $mail->SMTPAuth   = true;               // Enable SMTP authentication
   $mail->Username   = 'sanjeevishot@gmail.com';     // SMTP username
   $mail->Password   = '9840095950';         // SMTP password
   $mail->SMTPSecure = 'tls';              // Enable TLS encryption, 'ssl' also accepted
   $mail->Port       = 587;                // TCP port to connect to

   $mail->setFrom('sanjeevishot@gmail.com', trim(stripslashes($_POST['name']));           // Set sender of the mail
   $mail->addAddress('saramasa@syr.edu');           // Add a recipient
   //$mail->addAddress('receiver2@gfg.com', 'Name');   // Name is optional
   $mail->isHTML(true);                                  
   $mail->Subject = 'Website - Mailer';
   $mail->Body    = trim(stripslashes($_POST['message']));

   $mail->send();
   echo "Message Sent!"
   //$mail->AltBody = 'Body in plain text for non-HTML mail clients';
   // End of New Set up

   // $name = trim(stripslashes($_POST['name']));
   // $email = trim(stripslashes($_POST['email']));
   // $subject = trim(stripslashes($_POST['subject']));
   // $contact_message = trim(stripslashes($_POST['message']));

   
	// if ($subject == '') { $subject = "Contact Form Submission"; }

   // // Set Message
   // $message .= "Email from: " . $name . "<br />";
	// $message .= "Email address: " . $email . "<br />";
   // $message .= "Message: <br />";
   // $message .= nl2br($contact_message);
   // $message .= "<br /> ----- <br /> This email was sent from your site " . url() . " contact form. <br />";

   // // Set From: header
   // $from =  'sanjeevishot@gmail.com';

   // // Email Headers
	// $headers = "From: " . $from . "\r\n";
	// $headers .= "Reply-To: ". $email . "\r\n";
 	// $headers .= "MIME-Version: 1.0\r\n";
	// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

   // ini_set("sendmail_from", $to); // for windows server
   // $mail = mail($to, $subject, $message, $headers);

	// if ($mail) { echo "OK"; }
   // else { echo "Something went wrong. Please try again."; }
   } catch (Exception $e) 
   {
      echo "Something went wrong. Please try again." . $mail->ErrorInfo;
   }

}

?>
$mail = PHPMailer()
$mail->SMTPDebug = 2;                   // Enable verbose debug output
$mail->isSMTP();                        // Set mailer to use SMTP
$mail->Host       = 'smtp.googlemail.com';    // Specify main SMTP server
$mail->SMTPAuth   = true;               // Enable SMTP authentication
$mail->Username   = 'sanjeevishot@gmail.com';     // SMTP username
$mail->Password   = '9840095950';         // SMTP password
$mail->SMTPSecure = 'tls';              // Enable TLS encryption, 'ssl' also accepted
$mail->Port       = 587;                // TCP port to connect to

$mail->setFrom('from@gfg.com', 'Name');           // Set sender of the mail
$mail->addAddress('receiver1@gfg.net');           // Add a recipient
$mail->addAddress('receiver2@gfg.com', 'Name');   // Name is optional
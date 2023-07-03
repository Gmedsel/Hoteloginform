<?php
use PhpMailer\PhpMailer\PhpMailer;
use PhpMailer\PhpMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Enable SMTP debugging
    $mail->SMTPDebug = 0; // Set it to 2 for detailed debug output

    // Set the hostname of the mail server
    $mail->Host = 'your-smtp-hostname';

    // Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

    // Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';

    // Whether to use SMTP authentication
    $mail->SMTPAuth = true;
   
    // SMTP username and password
    $mail->Username = 'your-smtp-username';
    $mail->Password = 'your-smtp-password';

    // Set the "from" email address and name
    $mail->setFrom('edselmanawatao@gmail.com', 'Edsel');

    // Add a recipient email address
    $mail->addAddress('edselmanawatao@gmail.com', 'Recipient Name');

    // Set email subject and body
    $mail->Subject = 'Test Email';
    $mail->Body = 'This is a test email sent using SMTP in PHP';

    // Send the email
    $mail->send();
    echo 'Email sent successfully!';
} catch (Exception $e) {
    echo 'Error sending email: ' . $mail->ErrorInfo;
}
?>

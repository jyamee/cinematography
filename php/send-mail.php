<?php
// Include Composer's autoloader
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $budget = htmlspecialchars($_POST['budget']);
    $date = htmlspecialchars($_POST['date']);

    $to = "musa@rafeeqmedia.com";
    $subject = "New Contact Form Submission";
    $body = "First Name: $firstname\nLast Name: $lastname\nEmail: $email\nMessage: $message\nBudget: $budget\nPreferred Date: $date";

    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->SMTPDebug = 0;                                   // Enable verbose debug output (0 = off)
        $mail->isSMTP();                                        // Set mailer to use SMTP
        $mail->Host       = 'smtp.office365.com';                   // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                               // Enable SMTP authentication
        $mail->Username   = 'Musa@rafeeqmedia.com';             // SMTP username
        $mail->Password   = '06201992Kingmusa';              // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     // Enable TLS encryption, `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 587;                                // TCP port to connect to

        // Recipients
        $mail->setFrom($email, "$firstname $lastname");
        $mail->addAddress($to);                                 // Add a recipient

        // Content
        $mail->isHTML(false);                                   // Set email format to plain text
        $mail->Subject = $subject;
        $mail->Body    = $body;

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

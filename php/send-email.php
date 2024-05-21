<?php
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
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again.";
    }
}
?>

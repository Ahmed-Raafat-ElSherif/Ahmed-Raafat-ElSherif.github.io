<?php
$receiving_email_address = 'Ahmed.Raafat.ElSherif@gmail.com';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $headers = "From: $name <$email>\r\n";
    $full_message = "From: $name\nEmail: $email\n\n$message";

    if (mail($receiving_email_address, $subject, $full_message, $headers)) {
        echo 'Your message has been sent. Thank you!';
    } else {
        echo 'There was an error sending your message. Please try again later.';
    }
} else {
    echo 'Invalid request method.';
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "brianiscoolieo957@gmail.com"; // Replace with your email
    $subject_email = "Contact Form Submission: " . $subject; //added subject from form.
    $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";
    $headers = "From: brianiscoolieo957@gmail.com"; // Replace with a valid 'from' address

    if (mail($to, $subject_email, $body, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
} else {
    echo "Invalid request.";
}
?>
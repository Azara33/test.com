<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);

    $to = "sassineazara66@gmail.com";
    $subject = "New Sign Up";
    $message = "Name: $name\nEmail: $email\nPhone: $phone";
    $headers = "From: no-reply@example.com";

    // Save data to a file (optional)
    $file = 'signups.txt';
    $current = file_get_contents($file);
    $current .= "Name: $name\nEmail: $email\nPhone: $phone\n\n";
    file_put_contents($file, $current);

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        $_SESSION['message'] = "Sign up successful! Thank you.";
    } else {
        $_SESSION['message'] = "There was an error submitting your form. Please try again.";
    }
    header("Location: index.php");
    exit();
} else {
    $_SESSION['message'] = "Invalid request method.";
    header("Location: index.php");
    exit();
}
?>

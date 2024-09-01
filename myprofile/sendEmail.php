<?php
// Get all POST data from the form
$fullName = $_POST["full_name"];
$email = $_POST["email"];
$subject1 = $_POST["subject"];
$message1 = $_POST["message"];

// Send email to you
$to = "makwena079@gmail.com";
$subject = $subject1;
$message = $fullName . " has sent this message:\n" . $message1 . "\n\nRespond to this email: " . $email;
$headers = "From: " . $email;

// Check if the email is sent successfully
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully";
    header('Location:index.php?succ');
} else {
    echo "Failed to send email. Please try again.";
    header('Location:index.php?error');
}

?>

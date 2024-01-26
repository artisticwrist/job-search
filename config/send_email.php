<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $feedback = $_POST["feedback"];

    // Set the recipient email address
    $to = "contactdev.bigjoe@gmail.com";

    // Set the subject of the email
    $subject = "New Contact Form Submission";

    // Compose the email message
    $message = "Full Name: $full_name\n";
    $message .= "Email: $email\n";
    $message .= "Message:\n$feedback";

    // Set additional headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email.";
    }
}
?>
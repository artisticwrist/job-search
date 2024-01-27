<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['full-name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Replace 'your_email@example.com' with the actual email address where you want to receive messages.
    $to = 'hachstacks@gmail.com';
    $headers = "From: $email";

    $mail_success = mail($to, $subject, $message, $headers);

    if ($mail_success) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
} else {
    echo json_encode(['success' => false]);
}

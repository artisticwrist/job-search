<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "../connect/connect.php";

// Get the current page URL
$page_url = $_SERVER['REQUEST_URI'];

// Update the page visit count in the database
$sql = "INSERT INTO page_visits (page_url, visit_count) 
        VALUES ('$page_url', 1) 
        ON DUPLICATE KEY UPDATE visit_count = visit_count + 1";
$con->query($sql);


// require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $message = $_POST['feedback'];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'contactdev.bigjoe@gmail.com';
        $mail->Password   = 'kingjay'; // Use your App Password here
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom($email, $full_name);
        $mail->addAddress('contactdev.bigjoe@gmail.com');

        // Content
        $mail->isHTML(false);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body    = "Full Name: $full_name\nEmail: $email\nMessage:\n$message";

        // Send email
        $mail->send();
        echo '<script>alert("Message sent successfully!");</script>';
    } catch (Exception $e) {
        echo '<script>alert("Failed to send message. Error: ' . $mail->ErrorInfo . '");</script>';
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="contact-page">
    <?php
    require "../components/nav.php";
    ?>

    <section class="form-layout">
        <div class="layout-parent">
            <div class="layout-box">
                <div class="layout-box-child">
                    <h1>Header Text</h1>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet hendrerit turpis, id
                        scelerisque
                        erat ullamcorper id. Nullam feugiat lectus eu tellus suscipit, vel dignissim massa bibendum.
                    </p>

                    <div>
                        <p>Follow Us:</p>
                        <img src="../images/svg/facebook.svg" alt="">
                        <img src="../images/svg/twitter.svg" alt="">
                        <img src="../images/svg/instagram.svg" alt="">
                    </div>

                </div>
                <div class="layout-form">
                    <form action="#" method="POST">
                        <h3>Contact Us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="form-box">
                            <p>Full Name</p>
                            <input type="text" placeholder="" name="full_name">
                        </div>
                        <div class="form-box">
                            <p>Email</p>
                            <input type="email" placeholder="" name="email">
                        </div>
                        <div class="form-box">
                            <p>Message</p>
                            <textarea id="" name="feedback"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
    </section>

    <?php
    require "../components/footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
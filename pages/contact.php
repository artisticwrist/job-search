<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require "../config/connect/connect.php";
session_start();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact page</title>
    <link rel="stylesheet" href="../resources/css/style.css">
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
                    <h1>Client Services</h1>
                    <p> 
                    If you need assistance and can't find an answer to your question. Please contact Client Services between 9am and 5pm, Monday to Friday: Phone: 02017003855, 07080640600 or email: info@jobberman.com or Whatsapp 08097202945
                    </p>

                    <div>
                        <p>Follow Us:</p>
                        <img src="../resources/images/svg/facebook.svg" alt="">
                        <img src="../resources/images/svg/twitter.svg" alt="">
                        <img src="../resources/images/svg/instagram.svg" alt="">
                    </div>

                </div>
                <div class="layout-form">
                    <form action="../config/send_email.php" method="POST">
                        <h3>Send A Mail</h3>
                        <div class="form-box">
                            <p>Full Name</p>
                            <input type="text" placeholder="" name="full_name">
                        </div>
                        <div class="form-box">
                            <p>Email</p>
                            <input type="email" placeholder="" name="email">
                        </div>
                        <div class="form-box">
                            <p>Subject</p>
                            <input type="text" placeholder="" name="subject">
                        </div>
                        <div class="form-box">
                            <p>Message</p>
                            <textarea id="" rows="2" name="feedback"></textarea>

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
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
    <title>login page</title>
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
                    <p> If you need assistance and can't find an answer to your question. Please contact <b>Client Services</b> between 9am and 5pm, Monday to Friday: Phone: +++++++, +++++++ or email: info@calmbird.com or Whatsapp ++++++++
                    </p>

                    <div>
                        <p>Follow Us:</p>
                        <img src="../images/svg/facebook.svg" alt="">
                        <img src="../images/svg/twitter.svg" alt="">
                        <img src="../images/svg/instagram.svg" alt="">
                    </div>

                </div>
                <section class="layout-form">
                    <form method="POST" id="contactForm">
                        <div class="alert alert-success messenger-box-contact__msg" style="display: none" role="alert">
                            Your message was sent successfully.
                        </div>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                        <div class="form-box">
                            <label for="full-name">Name *</label>
                            <input type="text" name="full-name" id="full-name" placeholder="Enter your name" required>
                        </div>
                        <div class="form-box">
                            <label for="email">Email *</label>
                            <input type="email" name="email" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-box">
                            <label for="subject">Subject *</label>
                            <input type="text" name="subject" id="subject" placeholder="Enter your subject" required>
                        </div>
                        <div class="form-box">
                            <label for="message">Your Message *</label>
                            <textarea name="message" id="message" rows="2" placeholder="Enter your message" required></textarea>
                        </div>

                        <button class="btn btn-primary" type="submit">Send Message</button>
                    </form>
                </section>
            </div>
    </section>

    <?php
    require "../components/footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function (e) {
            e.preventDefault();

            var formData = new FormData(this);

            fetch('process_form.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.querySelector('.messenger-box-contact__msg').style.display = 'block';
                    document.getElementById('contactForm').reset();
                } else {
                    alert('Failed to send message. Please try again.');
                }
            })
            .catch(error => console.error('Error:', error));
        });
    </script>

</body>

</html>
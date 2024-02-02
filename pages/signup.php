<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

require "../config/connect/connect.php";
// Get the current page URL
// $page_url = $_SERVER['REQUEST_URI'];

// Update the page visit count in the database
// $sql = "INSERT INTO page_visits (page_url, visit_count) 
//         VALUES ('$page_url', 1) 
//         ON DUPLICATE KEY UPDATE visit_count = visit_count + 1";
// $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up page</title>
    <link rel="stylesheet" href="../resources/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    require "../components/nav.php";
    ?>
    <div class="section-form" id="section-form">
        <section class="find-job-section">
            <h1 class="logo">Calmbird</h1>
            <p style="color: #40514e70;margin:5px;">Sign up to join us now</p>
            <p style="color: red; font-size:13px;margin:3px;">
                <?php
                if(isset($_GET['notMatch'])){
                    echo  $_GET['notMatch'];
                }
            ?>
            </p>

            <form action="../config/signup-script.php" method="POST" class="fill-form">
                <input type="text" placeholder="Full Name" name="full-name" class="text-input">
                <input type="email" placeholder="Email" name="email" class="text-input">
                <select name="employer-status" id="" class="signup-option">
                    <option value="0">User</option>
                    <option value="0">Employer</option>
                </select>

                <input type="text" placeholder="Referral Code (optional)" name="referral" class="text-input">
                <input type="password" placeholder="Password (more than 7 values)" name="password" class="text-input">
                <input type="password" placeholder="Confirm Password" name="password-check" class="text-input">
                <button name="submit" type="submit">Sign Up</button>
            </form>
            <p style="font-size: 14px;">Already have an account ? <a href="../pages/login.php"
                    class="text-primary text-decoration-none">Log In</a></p>
        </section>
        <img src="../resources/images/mockup-iphone.svg" alt="" class="bg-mockup">
    </div>

    <?php
    require "../components/footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
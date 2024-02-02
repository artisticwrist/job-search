<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

require "../config/connect/connect.php";
// Get the current page URL
// $page_url = $_SERVER['REQUEST_URI'];

// // Update the page visit count in the database
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
    <title>login page</title>
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
            <p style="color: #40514e70; margin:5px;">Log in your account</p>
            <p style="color: #2F89FC; font-size:13px;margin:3px;">
                <?php
                if(isset($_GET['signup-msg'])){
                    echo  $_GET['signup-msg'];
                }elseif(isset($_GET['error'])){
                    echo $_GET['error'];
                }

                
            ?>
            </p>
            <!--log in user  -->
            <form action="../config/login-script.php" method="POST" class="fill-form">
                <input type="email" placeholder="Email" name="email" class="text-input">
                <input type="password" placeholder="Password" name="password" class="text-input">
                <button type="submit" name="submit">Log In</button>
                <div class="form-box">
                    <div class="check-box">
                        <input type="checkbox" name="" id="">
                        <p>remember me</p>
                    </div>
                    <p><a href="">forgot password ?</a></p>
                </div>
            </form>
            <p style="font-size: 14px;">Don't have an account yet ? <a href="../pages/signup.php"
                    class="text-primary text-decoration-none">Sign up</a></p>
            <p style="font-size: 14px;"><a href="../calmbird-admin/login_admin.php" style="color:#2f89fc ;">Admin</a></p>
        </section>
        <img src="../resources/images/mockup-iphone-2.svg" alt="" class="bg-mockup">
    </div>

    <?php
    require "../components/footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
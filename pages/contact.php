<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require "../connect/connect.php";
//records and stores user feedback message from contact form

if(isset($_POST['submit'])){
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    $insert = "INSERT INTO feedback (full_name,email,feedback) VALUES ('$full_name', '$email', '$feedback')";

    $query = mysqli_query($con,$insert);

    if($query){
        echo "<script>  alert('Feedback submitted successfully');  </script>";
    }else{
        echo mysqli_error($con, $query);
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
                    <form action="../pages/contact.php" method="POST">
                        <h1>Contact Us</h1>
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
                            <textarea id="" cols="30" rows="10" name="feedback"></textarea>
                        </div>
                        <button type="submit" name="submit">submit</button>
                    </form>
                </div>
            </div>
    </section>
    <?php
                // if(isset($_GET['notMatch'])){
                //     echo  $_GET['notMatch'];
                // }
    ?>
    <?php
    require "../components/footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
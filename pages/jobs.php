<?php

require "../connect/connect.php";
session_start();

// Get the current page URL
$page_url = $_SERVER['REQUEST_URI'];

// Update the page visit count in the database
$sql = "INSERT INTO page_visits (page_url, visit_count) 
        VALUES ('$page_url', 1) 
        ON DUPLICATE KEY UPDATE visit_count = visit_count + 1";
$con->query($sql);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="job-section">

    <!-- navigaton bar sticked to the top of page-->
    <?php
    require "../components/nav.php";
    ?>

    <!-- search jobs header -->


    <?php

    if (isset($_SESSION['email']) && isset($_SESSION['password']) ) {
    ?>
    <section class="welcome-user">
        <div class="close-profile-user" onclick="closeProfileHead()">
            <img src="../images/svg/close.svg" alt="">
        </div>
        <div style="display: flex; align-items:center;">
            <h1>Welcome <?php echo $_SESSION['full_name'] ?></h1>
            <img src="../images/svg/ham-burger.svg" alt="" style="cursor:pointer;margin-left: 15px; width:25px;"
                onclick="showNavUser()">
        </div>
        <p><?php echo $_SESSION['email'] ?></p>


        <?php
        if($_SESSION['subscribe_status'] == 0){
            ?>
        <li class="btn btn-primary " style="list-style-type:none ;"><a class="text-white text-decoration-none"
                href="../pages/subscription.php">Subscribe</a>
        </li>
        <?php
        }
        ?>

    </section>
    <?php
    }else{
        echo null;
    };
    ?>

    <div class="side-user-nav display-none">
        <img src="../images/svg/close-dark.svg" alt="" onclick="closeNavUser()" style="cursor:pointer;">
        <p><a href="../pages/edit-profile.php">Profile</a></p>
        <p><a href="../pages/subscription.php">Subscribe</a></p>
        <p><a href="../pages/upload-slip.php">Upload Payment</a></p>
        <p><a href="">Become an Employer</a></p>
        <p><a href="../config/logout.php" class="text-danger">Logout</a></p>
    </div>


    <div class="form-jobs " style="padding: 0px 60px;">
        <?php
     require "../components/search-job-form.php";
    ?>
    </div>


    <!-- jobs -->
    <?php

    if (isset($_SESSION['email']) && isset($_SESSION['password']) ) {
        if($_SESSION['employer_status']=== 1){
    ?>
    <section class="free-jobs">
        <?php
            require "../components/create-jobs.php";
        ?>
    </section>
    <?php
        }
    }else{
        echo null;
    };
    ?>


    <!-- jobs -->
    <section class="free-jobs">

        <h1>Available Jobs</h1>

        <div class="job-container">


            <?php
            require "../components/all-jobs.php";
            ?>
        </div>
    </section>

    <!-- footer -->
    <?php
    require "../components/footer.php";
    ?>



    <script src="../js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
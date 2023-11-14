<?php

require "../connect/connect.php";
session_start();

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

<body>

    <!-- navigaton bar sticked to the top of page-->
    <?php
    require "../components/nav.php";
    ?>

    <!-- search jobs header -->


    <?php

    if (isset($_SESSION['email']) && isset($_SESSION['password']) ) {
    ?>
    <section class="welcome-user">
        <h1>Welcome <?php echo $_SESSION['full_name'] ?></h1>
        <p><?php echo $_SESSION['email'] ?> | <a href="../config/logout.php">Logout account</a></p>
        <div style="display: flex; align-items:center;">
            <a href="../pages/edit-profile.php" style="text-decoration:underline; color:#ffff">Edit
                Profile</a>
            <?php
        if($_SESSION['subscribe_status'] == 0){
            ?>
            <li class="create-job-btn" style="list-style-type:none ; margin-left:30px;"><a
                    href="../pages/subscribe.php">Subscribe</a>
            </li>
            <?php
        }
        ?>
        </div>

    </section>
    <?php
    }else{
        echo null;
    };
    ?>


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

        <h2>Available Jobs</h2>

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
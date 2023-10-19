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
</head>

<body>

    <!-- navigaton bar sticked to the top of page-->
    <?php
    require "../components/nav.php";
    ?>

    <!-- search jobs header -->
    <div class="form-jobs">
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

        <?php
            require "../components/all-jobs.php";
        ?>
    </section>

    <!-- footer -->
    <?php
    require "../components/footer.php";
    ?>



    <script src="../js/app.js"></script>
</body>

</html>
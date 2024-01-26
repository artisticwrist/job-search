<?php
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
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../resources/css/style.css'>
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
        if($_SESSION['subscribe_status'] == 1 || $_SESSION['employer_status'] == 1){
            $verified = true;      
        }
    ?>


    <?php
    }
    ?>




    <?php

    if (isset($_SESSION['email']) && isset($_SESSION['password']) ) {
        if($_SESSION['subscribe_status'] == 1 || $_SESSION['employer_status'] == 1){
            $verified = true;      
        }
    ?>
    <nav class="navbar nav-search" style="box-shadow: none;margin-top:30px;">
        <div class="container-fluid">
            <div style="display: flex; align-items:center;">
                <?php
                    if(isset($verified) == true){

                ?>
                <img src="../resources/images/svg/verified.svg" alt="" style="width: 30px;margin-right:10px;">
                <?php
                }
                ?>
                <h1>Hello <span style="color: #2f89fc;"> <?php echo $_SESSION['full_name'] ?></span> </h1>
                <?php
                if($_SESSION['subscribe_status'] == 0){
                ?>
                <li class="btn btn-primary " style="list-style-type:none; margin-left:20px;"><a
                        class="text-white text-decoration-none" href="../pages/subscription.php">Subscribe</a>
                </li>
                <?php
                }
                ?>

            </div>
            <form class="d-flex" role="search">
                <input class="form-control me-2 search-input" type="search" placeholder="Live Search Job "
                    onkeyup="searchs()" aria-label="Search">
            </form>
        </div>
    </nav>

    <?php
    }
    ?>


    <div class="form-jobs available">
        <?php
     require "../components/search-job-form.php";
    ?>
    </div>


    <!-- jobs -->
    <?php

    if (isset($_SESSION['email']) && isset($_SESSION['password']) ) {
        if($_SESSION['employer_status']=== 1){
    ?>
    <section class="free-jobs available">
        <div class="job-box" style="width: max-content;">
            <div class="job-flex">
                <h1 style="margin:10px 5px;">Create New Job</h1>
                <button class="btn btn-primary" style="border: none; margin:10px 5px;"><a
                        href="../pages/create-jobs-form.php?admin=0" class="text-white text-decoration-none">Create
                        Job</a></button>
            </div>
    </section>
    <?php
        }
    }else{
        echo null;
    };
    ?>
    <!-- jobs -->

    <section class="free-jobs" id="available-jobs">
        <h1 class="available">Available Jobs</h1>

        <div class="job-container all-product">
            <?php
            require "../components/all-jobs.php";
            ?>


            <!-- refreshes page to show more jobs by random from database -->

            <form class="refresh-btn-box" method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                <button type="submit" name="submit">Refresh</button>
            </form>

        </div>
    </section>

    <!-- footer -->
    <?php
    require "../components/footer.php";
    ?>

    <script src="../resources/js/app.js"></script>
    <script src="../resources/js/search-job-user.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
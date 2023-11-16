<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include "../connect/connect.php";
    session_start();


    if (isset($_SESSION['email']) && isset($_SESSION['password']) ) {

        if(isset($_GET['admincreate'])){
            echo" <script> alert('admin created successfully !') </script>";
        }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="admin-body">
    <div class="admin-nav-dashboard side-nav">
        <a class="navbar-brand text-bold" href="#">Job Search</a>

        <div class="side-nav-options">
            <p><a href="../pages/admin.php">Home</a></p>
            <p><a href="../pages/admin/all-users-admin.php">All Users</a></p>
            <p><a href="../pages/admin/sub-request.php">Subscribe Request</a></p>
            <p><a href="../pages/create-admin.php">Create Admin</a></p>
            <p><a href="../pages/create-jobs-form.php">Create Job</a></p>
            <p><a href="../pages/admin/feedback.php">Feedback</a></p>
            <p><a href="../config/logout.php">Logout</a></p>
        </div>
    </div>


    <div class="admin-dashboard">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Job Search</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">

                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Create Job</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Admin name
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Create Admin</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>

                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="dashboard-header">
            <div>
                <p>Dashboard</p>
                <p>Lorem Ipsum Totem</p>
            </div>
            <a>
                Google Language
            </a>
        </div>
        <div class="admin-flex">
            <div class="admin-flex-item overview">
                <div class="box" style="background: royalblue;">
                    <p>Jobs Posted</p>
                    <?php
                                // SQL query to count the number of rows in the table
                                $query = "SELECT COUNT(*) as row_count FROM jobs";

                                // Execute the query
                                $result = mysqli_query($con, $query);

                                // Check if the query was successful
                                if ($result) {
                                    // Fetch the row count from the result
                                    $row = mysqli_fetch_assoc($result);
                                    $rowCount = $row['row_count'];

                                    // Output the number of rows
                                    echo $rowCount;

                                    // Close the result set
                                    mysqli_free_result($result);
                                } else {
                                    // Handle the query error if necessary
                                    echo "Error: " . mysqli_error($conn);
                                }
                        ?>
                    <p style="font-size: 13px;">This includes premuim/free Jobs</p>
                </div>
                <div class="box" style="background: orangered;">
                    <p>Users</p>
                    <?php
                                // SQL query to count the number of rows in the table
                                $query = "SELECT COUNT(*) as row_count FROM users";

                                // Execute the query
                                $result = mysqli_query($con, $query);

                                // Check if the query was successful
                                if ($result) {
                                    // Fetch the row count from the result
                                    $row = mysqli_fetch_assoc($result);
                                    $rowCount = $row['row_count'];

                                    // Output the number of rows
                                    echo $rowCount;

                                    // Close the result set
                                    mysqli_free_result($result);
                                } else {
                                    // Handle the query error if necessary
                                    echo "Error: " . mysqli_error($conn);
                                }
                        ?>
                    <p style="font-size: 13px;">This includes subscribed/unsubscribed users</p>
                </div>
                <div class="box" style="background: dodgerblue;">
                    <p>Feedbacks</p>
                    <?php
                                // SQL query to count the number of rows in the table
                                $query = "SELECT COUNT(*) as row_count FROM feedback";

                                // Execute the query
                                $result = mysqli_query($con, $query);

                                // Check if the query was successful
                                if ($result) {
                                    // Fetch the row count from the result
                                    $row = mysqli_fetch_assoc($result);
                                    $rowCount = $row['row_count'];

                                    // Output the number of rows
                                    echo $rowCount;

                                    // Close the result set
                                    mysqli_free_result($result);
                                } else {
                                    // Handle the query error if necessary
                                    echo "Error: " . mysqli_error($conn);
                                }
                        ?>
                    <p style="font-size: 13px;">Messages sent through contact page</p>
                </div>
                <div class="box" style="background: darkseagreen;">
                    <p>Sub Request</p>
                    <?php
                                // SQL query to count the number of rows in the table
                                $query = "SELECT COUNT(*) as row_count FROM sub_request";

                                // Execute the query
                                $result = mysqli_query($con, $query);

                                // Check if the query was successful
                                if ($result) {
                                    // Fetch the row count from the result
                                    $row = mysqli_fetch_assoc($result);
                                    $rowCount = $row['row_count'];

                                    // Output the number of rows
                                    echo $rowCount;

                                    // Close the result set
                                    mysqli_free_result($result);
                                } else {
                                    // Handle the query error if necessary
                                    echo "Error: " . mysqli_error($conn);
                                }
                        ?>
                    <p style="font-size: 13px;">Employer subscribe requests</p>
                </div>
            </div>
            <div class="admin-flex-item">
                <p><b>Total Users</b>
                <p>
                <p style="font-size: 13px;">
                    <?php
                                // SQL query to count the number of rows in the table
                                $query = "SELECT COUNT(*) as row_count FROM users";

                                // Execute the query
                                $result = mysqli_query($con, $query);

                                // Check if the query was successful
                                if ($result) {
                                    // Fetch the row count from the result
                                    $row = mysqli_fetch_assoc($result);
                                    $rowCount = $row['row_count'];

                                    // Output the number of rows
                                    echo $rowCount;

                                    // Close the result set
                                    mysqli_free_result($result);
                                } else {
                                    // Handle the query error if necessary
                                    echo "Error: " . mysqli_error($conn);
                                }
                        ?>
                    Total Users
                </p>
                <div class="list-items">
                    <div class="list-item-head">
                        <p>Profile</p>
                        <p>Status</p>
                        <p>Subscription</p>
                        <P>Action</P>
                    </div>

                    <?php
                require '../pages/admin/all-users-admin.php';
                ?>
                </div>
            </div>
        </div>
        <div class="admin-flex">
            <div class="admin-flex-item">
                <p><b>Sub Request</b>
                <p>
                <p style="font-size: 13px;">
                    <?php
                                // SQL query to count the number of rows in the table
                                $query = "SELECT COUNT(*) as row_count FROM sub_request";

                                // Execute the query
                                $result = mysqli_query($con, $query);

                                // Check if the query was successful
                                if ($result) {
                                    // Fetch the row count from the result
                                    $row = mysqli_fetch_assoc($result);
                                    $rowCount = $row['row_count'];

                                    // Output the number of rows
                                    echo $rowCount;

                                    // Close the result set
                                    mysqli_free_result($result);
                                } else {
                                    // Handle the query error if necessary
                                    echo "Error: " . mysqli_error($conn);
                                }
                            ?> Requests</p>
                <div class="list-items">
                    <div class="list-item-head">
                        <p>Profile</p>
                        <p>Slip</p>
                        <p>Date paid</p>
                        <P>Action</P>
                    </div>

                    <?php
                        require '../pages/admin/sub-request.php';
                    ?>


                </div>
            </div>
            <div class="admin-flex-item">
                <p><b>Feedbacks</b></p>
                <?php
                    require '../pages/admin/feedback.php';
                ?>
            </div>
        </div>
        <script src="../js/app.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>

<?php

    }else{
        header("Location: ../pages/login_admin.php");
    }
    
?>
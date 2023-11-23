<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include "../connect/connect.php";
        session_start();


    if (isset($_SESSION['email']) && isset($_SESSION['password']) ) {

        if(isset($_GET['admincreate'])){
            echo" <script> alert('admin created successfully !') </script>";
        }

// Fetch most visited pages from the database
$sqlVisit = "SELECT page_url, visit_count FROM page_visits ORDER BY visit_count DESC LIMIT 8"; 
$resultVisit = $con->query($sqlVisit);




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../admin/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav>
        <div class="nav-box">
            <div class="logo">Job Search</div>
            <img src="../images/svg/ham-burger.svg" alt="" class="burger-nav">
        </div>

        <div class="nav-box">
            <div class="item">
                <img src="../images/svg/web.svg" alt="">
                <p><a class="text-white text-decoration-none" href="../pages/index.php?destroy=1">View Website</a>
                </p>
            </div>
            <div class="item">
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <?php echo $_SESSION['username'] ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/edit-profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="../config/logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <section class="admin-section">
        <div class="admin-side-nav">
            <div class="side-nav-list">
                <p onclick="showDashboard()">
                    <img src="../images/svg/admin.svg" alt="">
                    Dashboard
                </p>
                <p onclick="showJobs()">
                    <img src="../images/svg/box.svg" alt="">
                    Jobs
                </p>
                <p onclick="showUsers()">
                    <img src="../images/svg/accounts.svg" alt="">
                    Users
                </p>
                <?php
                
                if($_SESSION['super_admin']== 1){
                    
                ?>
                <p onclick="createAdmin()">
                    <img src="../images/svg/admin.svg" alt="">
                    Create Admin
                </p>

                <?php }else{
                    echo null;
                } ?>

                <p>
                    <a href="../pages/create-jobs-form.php?admin= 1">
                        <img src="../images/svg/form.svg" alt="">
                        New Job
                    </a>
                </p>

                <p>
                    <a href="../config/logout.php">
                        <img src="../images/svg/admin.svg" alt="">
                        Logout
                    </a>
                </p>
            </div>
        </div>

        <!-- DASHBOARD -->
        <div class="admin-body">
            <!-- DASHBOARD HEADER -->
            <div class="dashboard-admin">
                <img src="../images/svg/home.svg" alt="">
                <h6>Dashboard</h6>
            </div>

            <!-- OVERVIEW -->
            <div class="overview-box">
                <div class="overview" style="margin-left: 0px; background: darkkhaki;">

                    <p>
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
                    </p>
                    <p>Users</p>
                </div>
                <div class="overview" style="background: darkorange;">
                    <p>
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
                    </p>
                    <p>Sub Request</p>
                </div>
                <div class="overview" style="background: palevioletred;">
                    <p>
                        <?php
                                // SQL query to count the number of rows in the table
                                $query = "SELECT COUNT(*) as row_count FROM user_request";

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
                    </p>
                    <p>User Request</p>
                </div>
                <div class="overview" style="background: rosybrown;">
                    <p>
                        <?php
                                // SQL query to count the number of rows in the table
                                $query = "SELECT COUNT(*) as row_count FROM users WHERE employer_status =1";

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

                    </p>
                    <p>Employers</p>
                </div>
            </div>
            <section class="admin-box">

                <div class="flex" style="margin-left: 0px; width:100%;">
                    <div class="admin-dashboard-item-header">
                        <div class="admin-dashboard-item-header-item">
                            <p>Top most visited pages</p>
                        </div>
                        <div class="admin-dashboard-item-header-item">
                            <img src="../images/svg/full-screen.svg" alt="" onclick="viewFullScreen(this)">
                            <img src="../images/svg/mini-screen.svg" alt="" onclick="minimiseScreen(this)">
                        </div>
                    </div>
                    <hr>
                    <div class="list">
                        <div class="list-header">
                            <p>#</p>
                            <p class="w-flex">URL</p>
                            <p>VIEWS</p>
                        </div>
                        <div class="overflowScroll">
                            <?php
                            if ($resultVisit->num_rows > 0) {
                                $counter = 1;
                                while ($row = $resultVisit->fetch_assoc()) {
                                    echo '<div class="list-header" style="font-size:15px; color:gray;">
                                            <p>' . $counter . '</p>
                                            <p class="w-flex">' . $row["page_url"] . '</p>
                                            <p>' . $row["visit_count"] . ' (Views)</p>
                                        </div>';
                                    $counter++;
                                }
                            } else {
                                echo '<p>No data available</p>';
                            }
                            ?>
                        </div>
                    </div>
                </div>

            </section>


            <section class="admin-box">
                <div class="flex" style="margin-left: 0px;">
                    <div class="admin-dashboard-item-header">
                        <div class="admin-dashboard-item-header-item">
                            <p>Verify Jobs</p>
                        </div>
                        <div class="admin-dashboard-item-header-item">
                            <img src="../images/svg/full-screen.svg" alt="" onclick="viewFullScreen(this)">
                            <img src="../images/svg/mini-screen.svg" alt="" onclick="minimiseScreen(this)">
                        </div>
                    </div>
                    <hr>
                    <div class="overflow-scroll-list">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">TITLE</th>
                                    <th scope="col">DATE</th>
                                    <th scope="col">APPROVE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = "SELECT * FROM `jobs` WHERE status = 0";

                                    $result = mysqli_query($con, $sql);

                                    if ($result && mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $id = $row['job_id'];
                                            $title = $row['job_name'];
                                            $date_created = $row['date_uploaded'];
                                            $date_created = date("jS M, Y.", strtotime($date_created));

                                            //Disables normal admins from verifying a request
                                            if($_SESSION['super_admin'] == 0){
                                                $disabled = 'disabled';
                
                                            }else{
                                                $disabled = null;

                                            }

                                            echo '
                                                <tr>
                                                    <th scope="row">' . $id . '</th>
                                                    <td>' . $title . '</td>
                                                    <td>' . $date_created . '</td>
                                                    <td>

                                <form action="../config/update_status.php" method="post">
                                    <input type="hidden" name="job_id" value="' . $id . '">
                                    <button type="submit" class="btn " '.$disabled.'>
                                        <img class="svg-check" src="../images/svg/success.svg" alt="">
                                    </button>
                                </form>

                                </td>
                                </tr>
                                ';
                                }
                                } else {
                                echo '<tr>
                                    <td colspan="4">No data available</td>
                                </tr>';
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="flex">
                    <div class="admin-dashboard-item-header">
                        <div class="admin-dashboard-item-header-item">
                            <p>Employer Request</p>
                        </div>
                        <div class="admin-dashboard-item-header-item">
                            <img src="../images/svg/full-screen.svg" alt="" onclick="viewFullScreen(this)">
                            <img src="../images/svg/mini-screen.svg" alt="" onclick="minimiseScreen(this)">
                        </div>
                    </div>
                    <hr>
                    <div class="overflow-scroll-list">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">EMAIL</th>
                                    <th scope="col">SLIP</th>
                                    <th scope="col">PLAN</th>
                                    <th scope="col">AMOUNT</th>
                                    <th scope="col">APPROVE</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                    $sql = "SELECT * FROM `sub_request`";

                                    $result = mysqli_query($con, $sql);

                                    if ($result && mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $id = $row['id'];
                                            $email = $row['email'];
                                            $plan = $row['plan'];
                                            $slip = $row['payment_slip'];
                                            $amount = $row['amount'];

                                            //Disables normal admins from verifying a request
                                            if($_SESSION['super_admin'] == 0){
                                                $disabled = 'disabled';
                
                                            }else{
                                                $disabled = null;

                                            }
                                            
                                            echo '
                                                <tr>
                                                    <th scope="row">' . $id . '</th>
                                                    <td>' . $email . '</td>
                                                    <td onclick="showModal(\'../images/' . $slip . '\')">' . $slip . '</td>
                                                    <td>' . $plan . '</td>
                                                    <td>' . $amount . '</td>
                                                    <td>
                                                    <form action="../config/verify-employer-request.php" method="post">
                                                        <input type="hidden" name="email" value="' . $email . '">
                                                            <button class="btn" '.$disabled.'>
                                                                <img src="../images/svg/success.svg" alt="">
                                                            </button>
                                                    </form>
                                                    </td>
                                                </tr>
                                            ';
                                        }
                                    } else {
                                        echo '<tr><td colspan="4">No data available</td></tr>';
                                    }
                                ?>

                            </tbody>
                        </table>
                    </div>

                </div>
            </section>

            <section class="admin-box">
                <div class="flex" style="margin-left: 0px;">
                    <div class="admin-dashboard-item-header">
                        <div class="admin-dashboard-item-header-item">
                            <p>Referrals</p>
                        </div>
                        <div class="admin-dashboard-item-header-item">
                            <img src="../images/svg/full-screen.svg" alt="" onclick="viewFullScreen(this)">
                            <img src="../images/svg/mini-screen.svg" alt="" onclick="minimiseScreen(this)">
                        </div>
                    </div>
                    <hr>
                    <div class="overflow-scroll-list">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">APPROVED</th>
                                    <th scope="col">OPERATIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = "SELECT id, referring_email, new_user_email FROM `referrals`";

                                    $result = mysqli_query($con, $sql);

                                    if ($result && mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $reffer_id = $row['id'];
                                            $referring_email = $row['referring_email'];
                                            $newUser = $row['new_user_email'];
            

                                            // Count the number of users with subscribe_status = 1 for the specific new_user_email
                                            $countSubscribedUsers = "SELECT COUNT(*) as subscribed_count FROM `users` WHERE subscribe_status = 1 AND email = '$newUser'";
                                            $resultSubscribedUsers = mysqli_query($con, $countSubscribedUsers);
                                            $rowSubscribedUsers = mysqli_fetch_assoc($resultSubscribedUsers);
                                            $subscribedCount = $rowSubscribedUsers['subscribed_count'];
                                            
                                            if($subscribedCount == 1 && $_SESSION['super_admin'] == 1){
                                            $subscribedCount = "Approved";
                                            $disabled = "";
                                            }elseif($subscribedCount == 0 || $_SESSION['super_admin'] == 0){
                                                $subscribedCount = "Pending";
                                                $disabled = "disabled";
                                            }

                                            echo '
                                                <tr>
                                                    <td>'.$reffer_id.'</td>
                                                    <td>'.$referring_email.'</td>
                                                    <td>'.$subscribedCount.'</td>
                                                    <td style="display:flex; align-items:center; ">
                                                        <form action="../config/update_status.php" method="post">
                                                            <input type="hidden" name="job_id" value="' . $id . '">
                                                            <button type="submit" class="btn btn-dark" '.$disabled .'>
                                                                pay
                                                            </button>
                                                
                                                        </form>
                                                        <button ' . $disabled . ' type="button" class="btn" onclick="openCloseModalThree(' . $reffer_id . ')">
                                                            <img src="../images/svg/bin-dark.svg" alt="">
                                                        </button>
                                    
                                                    </td>                                                
                                                </tr>

                                    <section class="modal modal-confirmation" id="modalthree-' . $reffer_id . '">
                                        <p>Proceed with action ?</p>
                                        <div style="display:flex; align-items:center;">
                                            <button class="btn btn-danger close-modal" onclick="closeModalThree(' . $reffer_id . ')" style="margin:0px 10px;">
                                                Cancel
                                            </button>
                                            
                                            <form action="../config/delete-referral.php" method="post" style="margin:0px 10px;">
                                                <input type="hidden" name="id" value="' . $reffer_id . '">
                                                <button ' . $disabled . ' type="submit" class="btn btn-dark">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </section>

                                            ';
                                        }
                                    } else {
                                        echo '<tr>
                                            <td colspan="4">No data available</td>
                                        </tr>';
                                    }
                                ?>


                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="flex">
                    <div class="admin-dashboard-item-header">
                        <div class="admin-dashboard-item-header-item">
                            <p>User Request</p>
                        </div>
                        <div class="admin-dashboard-item-header-item">
                            <img src="../images/svg/full-screen.svg" alt="view full screen"
                                onclick="viewFullScreen(this)">
                            <img src="../images/svg/mini-screen.svg" alt="minimise screen"
                                onclick="minimiseScreen(this)">
                        </div>
                    </div>
                    <hr>
                    <div class="overflow-scroll-list">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">EMAIL</th>
                                    <th scope="col">PLAN</th>
                                    <th scope="col">SLIP</th>
                                    <th scope="col">AMOUNT</th>
                                    <th scope="col">APPROVE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = "SELECT * FROM `user_request`";

                                    $result = mysqli_query($con, $sql);

                                    if ($result && mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $id = $row['id'];
                                            $email = $row['email'];
                                            $slip = $row['slip'];
                                            $amount = $row['amount'];
                                            $plan = $row['plan'];

                                            echo '
                                                <tr>
                                                    <th scope="row">' . $id . '</th>
                                                    <td>' . $email . '</td>
                                                    <td>' . $plan . '</td>
                                                    <td onclick="showModalUserReq(\'../images/' . $slip . '\')">' . $slip . '</td>
                                                    <td>'.$amount .'</td>
                                                    <td>
                                                    <form action="../config/verify-sub-request.php" method="post">
                                                        <input type="hidden" name="email" value="' . $email . '">
                                                            <button class="btn">
                                                                <img src="../images/svg/success.svg" alt="">
                                                            </button>
                                                    </form>
                                                    </td>
                                                </tr>
                                            ';
                                        }
                                    } else {
                                        echo '<tr><td colspan="4">No data available</td></tr>';
                                    }
                                    ?>

                            </tbody>
                        </table>
                    </div>

                </div>
            </section>


        </div>

        <!-- JOBS && CREATE JOBS -->
        <div class="admin-jobs display-none">
            <div class="dashboard-admin">
                <img src="../images/svg/edit-fill-dark.svg" alt="">
                <h6>Jobs</h6>
            </div>
            <div class="serach-create">
                <input type="search" placeholder="search..." name="search-job" id="">
                <button class="btn btn-primary"><a class="text-white text-decoration-none"
                        href="../">Create</a></button>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT job_id, job_name, date_uploaded, status FROM jobs";
                        $result = mysqli_query($con, $sql);

                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $job_id = $row['job_id'];
                                $title = $row['job_name'];
                                $date_created = date("jS M, Y.", strtotime($row['date_uploaded']));
                                $status = $row['status'];

                                // Disables normal admins from verifying a request
                                if ($_SESSION['super_admin'] == 0) {
                                    $disabled = 'disabled';
                                } else {
                                    $disabled = null;
                                }

                                // Outputs "Approved" if the job has been approved or was posted by a super admin
                                // Outputs "Not Approved" if the job was posted by an employer
                                if ($status == 1) {
                                    $status = "Approved";
                                } elseif ($status == 0) {
                                    $status = "Not Approved";
                                }

                                echo '
                                    <tr>
                                        <th scope="row">' . $job_id . '</th>
                                        <td>' . $title . '</td>
                                        <td>
                                            <p class="approved">' . $status . '</p>
                                        </td>
                                        <td>' . $date_created . '</td>
                                        <td class="operation-items">
                                            <form action="../config/update_status.php" method="post" >
                                                <input type="hidden" name="job_id" value="' . $job_id . '">
                                                <button ' . $disabled . ' type="submit" class="btn-primary btn">
                                                    <img src="../images/svg/check.svg" alt="">
                                                </button>
                                            </form>

                                            <button ' . $disabled . ' type="button" class="btn-danger btn" onclick="openCloseModal(' . $job_id . ')">
                                                <img src="../images/svg/bin.svg" alt="">
                                            </button>
                                        </td>
                                    </tr>

                                    <section class="modal modal-confirmation" id="modal-' . $job_id . '">
                                        <p>Proceed with action ?</p>
                                        <div style="display:flex; align-items:center;">
                                            <button class="btn btn-danger close-modal" onclick="closeModal(' . $job_id . ')" style="margin:0px 10px;">
                                                Cancel
                                            </button>
                                            
                                            <form action="../config/delete_row.php" method="post" style="margin:0px 10px;">
                                                <input type="hidden" name="job_id" value="' . $job_id . '">
                                                <button ' . $disabled . ' type="submit" class="btn btn-dark">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </section>
                                ';
                            }
                        } else {
                            echo '<tr><td colspan="4">No data available</td></tr>';
                        }
                        ?>



                </tbody>
            </table>
        </div>

        <!-- VIEW USERS-->
        <div class="admin-users display-none">
            <div class="dashboard-admin">
                <img src="../images/svg/accounts-dark.svg" alt="">
                <h6>Users</h6>
            </div>
            <div class="serach-create">
                <input type="search" placeholder="search..." name="search-job" id="">
                <button class="btn btn-primary"><a class="text-white text-decoration-none"
                        href="../">Create</a></button>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM users ORDER BY date_created DESC";
                    $result = mysqli_query($con, $sql);

                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $userid = $row['id'];
                            $email = $row['email'];
                            $date_created = date("jS M, Y.", strtotime($row['date_created']));
                            $status = $row['subscribe_status'];

                            // Disables normal admins from verifying a request
                            if ($_SESSION['super_admin'] == 0) {
                                $disabled = 'disabled';
                            } else {
                                $disabled = null;
                            }

                            // Checks if the user has subscribed
                            if ($status == 1) {
                                $status = "subscribed";
                            } elseif ($status == 0) {
                                $status = "Not subscribed";
                            }

                            echo '
                                <tr>
                                    <th scope="row">' . $userid . '</th>
                                    <td>' . $email . '</td>
                                    <td>
                                        <p class="approved">' . $status . '</p>
                                    </td>
                                    <td>' . $date_created . '</td>
                                    <td class="operation-items">
                                        <form action="../pages/edit-profile-admin.php" method="get">
                                            <input type="hidden" name="id" value="' . $userid . '">
                                            <button ' . $disabled . ' type="submit" class="btn-primary btn">
                                                <img src="../images/svg/edit.svg" alt="">
                                            </button>
                                        </form>

                                        <button ' . $disabled . ' type="button" class="btn-danger btn" onclick="openCloseModalTwo(' . $userid . ')">
                                            <img src="../images/svg/bin.svg" alt="">
                                        </button>
                                        
                                    </td>
                                </tr>

                                                        <section class="modal modal-confirmation" id="modaltwo-' . $userid . '">
                                                            <p>Proceed with action hello?</p>
                                                            <div style="display:flex; align-items:center;">
                                                                <button class="btn btn-danger close-modal" onclick="closeModalTwo(' . $userid . ')" style="margin:0px 10px;">
                                                                    Cancel
                                                                </button>
                                                                
                                                                <form action="../config/delete-user.php" method="post" style="margin:0px 10px;">
                                                                    <input type="hidden" name="id" value="' . $userid . '">
                                                                    <button ' . $disabled . ' type="submit" class="btn btn-dark">
                                                                        Delete
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </section>
                            ';
                        }
                    } else {
                        echo '<tr><td colspan="4">No data available</td></tr>';
                    }
                    ?>

                </tbody>
            </table>
        </div>

        <!-- CREATE ADMIN -->
        <div class="create-admin-container display-none">
            <section class="find-job-section">
                <h1 class="logo">Create Admin</h1>
                <p style="color: red; font-size:13px;margin:3px;">
                    <?php
                if(isset($_GET['notMatch'])){
                    echo  $_GET['notMatch'];
                    }
                ?>
                </p>

                <form action="../config/new-admin.php" method="POST" class="fill-form">
                    <input type="text" placeholder="Username" name="username" class="text-input">
                    <input type="text" placeholder="Email" name="email" class="text-input">
                    <select name="role" id="">
                        <option value="">Select Role</option>
                        <option value="">Create Admin</option>
                        <option value="">Verify Accounts</option>
                        <option value="">Manage Users</option>
                    </select>
                    <input type="password" placeholder="Password (more than 7 values)" name="password"
                        class="text-input">
                    <input type="password" placeholder="Re enter password" name="password-check" class="text-input">
                    <button name="submit" type="submit">create admin</button>
                </form>
            </section>
        </div>

    </section>


    <section class="modal modal-admin modal-req">
        <img src="../images/<?php  ?>" alt="" id="modalImage">
        <button class="btn btn-danger m-10" onclick="closeContainer()">Cancel</button>
    </section>


    <script src="../js/admin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>

<?php

    }else{
        header("Location: ../admin/login_admin.php");
    }
    
?>
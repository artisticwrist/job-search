<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "../config/connect/connect.php";
session_start();

if (isset($_SESSION['email']) && isset($_SESSION['password']) ) {
    $sessionFullName = $_SESSION['full_name'];
    $sessionEmail = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style>
.referral-user-list {
    width: 97%;
    overflow-x: scroll;
    padding: 20px;

}

@media only screen and (max-width: 850px) {
    .referral-user-list {
        padding: 40px 20px;
    }
}
</style>

<body>

    <!-- navigaton bar sticked to the top of page-->
    <?php
    require "../components/nav.php";
    ?>

    <div class="referral-user-list">
        <h4><?php  echo $sessionFullName ?> <span style="color: #2f89fc;;">Referral List</span> </h4>
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">REFERRED</th>
                    <th scope="col">APPROVED</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT id, referring_email, new_user_email FROM `referrals` WHERE referring_email='$sessionEmail'";

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
                            if($subscribedCount == 1){
                                $subscribedCount = "Approved";
                            }elseif($subscribedCount == 0){
                                $subscribedCount = "Not Aapproved";
                            }

                            echo '
                                <tr>
                                    <td colspan="1">'.$reffer_id.'</td>
                                    <td colspan="1">'.$newUser.'</td>
                                    <td colspan="1">'.$subscribedCount.'</td>         
                                </tr>
                                ';
                        }
                    } else {
                        echo '
                            <tr>
                                <td colspan="4">No data available</td>
                            </tr>
                            ';
                    }
                ?>


            </tbody>
        </table>
        <button class="btn btn-secondary"><a class="text-white text-decoration-none" href="../pages/jobs.php">Back to
                Jobs</a></button>
    </div>



    <!-- footer -->
    <?php
    require "../components/footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
<?php

    }else{
        header("Location: ../pages/jobs.php");
    }
    
?>
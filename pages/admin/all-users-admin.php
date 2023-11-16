<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "job";

$con = mysqli_connect($host, $username, $password, $database);

error_reporting(E_ALL);
ini_set('display_errors', 1);

$sql = "SELECT * FROM `users`";

$result = mysqli_query($con, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $full_name = $row['full_name'];
        $email = $row['email'];
        $employer_status = $row['employer_status'];
        $sub_status = $row['subscribe_status'];
        $password = $row['password'];
        $date_created = $row['date_created'];
        $date_created = date("jS M, Y.", strtotime($date_created));

        if ($employer_status == 1) {
            $employer = "Employer";
        } elseif ($employer_status == 0) {
            $employer = "User";
        }

        if ($sub_status == 1) {
            $subscriber = "Subscribed";
        } elseif ($sub_status == 0) {
            $subscriber = "Not running";
        }

        echo '

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

<body>
                    <div class="list-item-body">
                        <div class="item">
                            <p><b>' . $full_name . '</b></p>
                            <p style="font-size:13px;">contact@gmail.com</p>
                        </div>
                        <p class="item" style="font-size:13px;">' . $employer . '
                        </p>
                        <p class="item" style="font-size:13px;">' . $subscriber . '
                        </p>
                        <div class="item">
                            <a href="../pages/edit-profile-admin.php?id=' . $id . '">
                            <img src="../images/svg/edit.svg" class="edit-svg" alt="">
                            </a>                        
                        </div>
                    </div>
</body>

</html>
        ';
    }
}
?>
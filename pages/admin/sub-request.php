<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "job";

$con = mysqli_connect($host, $username, $password, $database);


error_reporting(E_ALL);
ini_set('display_errors', 1);
    
$sql = "SELECT * FROM `sub_request`";
$result = mysqli_query($con, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $email = $row['email'];
        $payment_slip = $row['payment_slip'];
        $date_uploaded = $row['date_uploaded'];
        $date_uploaded = date("jS M, Y.", strtotime($date_uploaded));

        echo '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
                    <div class="list-item-body">
                        <div class="item">
                            <p><b>Joseph George</b></p>
                            <p style="font-size:13px;">'.$email.'</p>
                        </div>
                        <p class="item" style="font-size:13px;">'.$payment_slip.'
                        </p>
                        <p class="item" style="font-size:13px;">'.$date_uploaded.'
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
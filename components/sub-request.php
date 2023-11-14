<?php
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
                    <div class="list-dashboard-users">
                        <div class="dashboard-users">
                            <p>'.$email.'</p>
                        </div>
                        <div class="dashboard-users">
                            <p>'.$payment_slip.'</p>
                        </div>
                        <div class="dashboard-users">
                            <p>'.$date_uploaded.'</p>
                        </div>
                        <div class="dashboard-users">
                            <span>
                                <img src="../images/svg/remove.svg" alt="">
                                <img src="../images/svg/check.svg" alt="">
                            </span>
                        </div>
                    </div>
        ';
    }
}
?>
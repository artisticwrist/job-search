<?php
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
            <div class="list-dashboard-users">
                <div class="dashboard-users s-n">
                    <p>' . $id . '</p>
                </div>
                <div class="dashboard-users">
                    <p>' . $full_name . '</p>
                </div>
                <div class="dashboard-users">
                    <p>' . $employer . '</p>
                </div>
                <div class="dashboard-users">
                    <p>' . $subscriber . '</p>
                </div>
                <div class="dashboard-users">
                    <p>' . $date_created . '</p>
                </div>
                <div class="dashboard-users">
                    <button><a href="../pages/edit-profile-admin.php?id=' . $id . '">Edit Profile</a></button>
                </div>
            </div>
        ';
    }
}
?>
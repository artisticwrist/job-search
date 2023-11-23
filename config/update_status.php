<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include "../connect/connect.php";

    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $job_id = $_POST['job_id'];

    // Perform the update in the database
    $update_sql = "UPDATE jobs SET status = 1 WHERE job_id = $job_id";
    $update_result = mysqli_query($con, $update_sql);

    if ($update_result) {
        echo "Status updated successfully.";
    } else {
        echo "Error updating status: " . mysqli_error($con);
    }
}
?>
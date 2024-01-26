<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include "../config/connect/connect.php";

    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Perform the update in the database
    $update_sql = "UPDATE users SET employer_status = 1 WHERE email = '$email'";
    $update_result = mysqli_query($con, $update_sql);

    // Delete employer from employer request table
    $delete_sql = "DELETE FROM sub_request WHERE email = '$email'";
    $delete_result = mysqli_query($con, $delete_sql);

    if ($update_result && $delete_result) {
        header("Location: ../pages/success.php");
    } else {
        echo "Error updating status: " . mysqli_error($con);
    }
}
?>
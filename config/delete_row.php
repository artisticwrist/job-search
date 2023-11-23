<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include "../connect/connect.php";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $job_id = $_POST['job_id'];

        // Perform the delete operation in the database
        $delete_sql = "DELETE FROM jobs WHERE job_id = $job_id";
        $delete_result = mysqli_query($con, $delete_sql);

        if ($delete_result) {
            echo "Job deleted successfully.";
        } else {
            echo "Error deleting row: " . mysqli_error($con);
        }
    }
?>
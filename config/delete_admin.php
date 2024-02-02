<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include "../config/connect/connect.php";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $admin_id = $_POST['admin_id'];

        // Perform the delete operation in the database
        $delete_sql = "DELETE FROM admin_log WHERE id = $admin_id";
        $delete_result = mysqli_query($con, $delete_sql);

        if ($delete_result) {
            header("Location: ../pages/delete.php?delete=Admin deleted successfully");
        } else {
            echo "Error deleting row: " . mysqli_error($con);
        }
    }
?>
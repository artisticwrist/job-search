<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include "../config/connect/connect.php";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $blog_id = $_POST['blog_id'];

        // Perform the delete operation in the database
        $delete_sql = "DELETE FROM blogs WHERE blog_id = $blog_id";
        $delete_result = mysqli_query($con, $delete_sql);

        if ($delete_result) {
            header("Location: ../pages/delete.php?delete=Blog deleted successfully");
        } else {
            echo "Error deleting row: " . mysqli_error($con);
        }
    }
?>
<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include "../config/connect/connect.php";
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = $_POST['id'];

    // Perform the delete operation in the database
    $delete_sql = "DELETE FROM users WHERE id = $userid ";
    $delete_result = mysqli_query($con, $delete_sql);

    if ($delete_result) {
        header("Location: ../pages/delete.php?delete=User deleted successfully");
    } else {
        echo "Error deleting row: " . mysqli_error($con);
    }
}
?>
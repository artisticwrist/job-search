<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "../config/connect/connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if 'id' is set in the POST array
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        // Perform the delete operation in the database
        $delete_sql = "DELETE FROM referrals WHERE id=$id";
        $delete_result = mysqli_query($con, $delete_sql);

        if ($delete_result) {
            header("Location: ../pages/delete.php?delete=Referral deleted successfully");
        } else {
            echo "Error deleting row: " . mysqli_error($con);
        }
    } else {
        echo "ID parameter not set in the POST request.";
    }
}
?>
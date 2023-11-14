<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start the session
session_start();

// Include the database connection
include '../connect/connect.php';

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the updated details from the form

    $fullname = $_POST['full_name'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // // Check if the password is empty
    if (empty($password)) {
        // Password field is empty, do not update the password
        $sql = "UPDATE users SET full_name='$fullname' WHERE email='$email'";
    } else {
        // Password field is not empty, update the password
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE users SET full_name='$fullname', password='$passwordHash' WHERE email='$email'";
    }

    // Execute the SQL query
    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Update Successful. Login again!');</script>";
        echo "<script>setTimeout(function(){window.location.href='../pages/login.php?signup-msg=edit profile complete. login again'},500);</script>";
        exit();
    } else {
        echo "<script>alert('Error updating record: " . mysqli_error($con) . "');</script>";
    }
} 

// Close the database connection
mysqli_close($con);
?>
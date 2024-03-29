<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include "../config/connect/connect.php";

// Establish MySQLi connection


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if (empty($email)) {
        header("Location: ../pages/login.php?error=Email is required");
        exit();
    } elseif (empty($password)) {
        header("Location: ../pages/login.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE email=?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $hashed_password = $row['password'];

            if (password_verify($password, $hashed_password)) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['full_name'] = $row['full_name'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['employer_status'] = $row['employer_status'];
                $_SESSION['subscribe_status'] = $row['subscribe_status'];
                $_SESSION['referral_code'] = $row['referral_code'];
                $_SESSION['account_name'] = $row['account_name'];
                $_SESSION['account_type'] = $row['account_type'];
                $_SESSION['account_number'] = $row['account_number'];
                $_SESSION['bank_name'] = $row['bank_name'];
                header("Location: ../pages/jobs.php");
                exit();
            } else {
                header("Location:  ../pages/login.php?error=Incorrect Email or Password");
                exit();
            }
        } else {
            header("Location:  ../pages/login.php?error=Incorrect Email or Password");
            exit();
        }
    }
} else {
    header("Location:  ../pages/login.php");
    exit();
}
?>
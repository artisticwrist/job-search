<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include "../connect/connect.php";

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
        header("Location: ../admin/login_admin.php?error=Admin Email is required");
        exit();
    } elseif (empty($password)) {
        header("Location: ../admin/login_admin.php?error=Admin Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM admin_log WHERE email=?";
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
                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['employer_status'] = $row['employer_status'];
                $_SESSION['subscribe_status'] = $row['subscribe_status'];
                $_SESSION['super_admin'] = $row['super_admin'];
                header("Location: ../admin/super-admin.php");
                exit();
            } else {
                header("Location:  ../admin/login_admin.php?error=Incorrect Email or Password");
                exit();
            }
        } else {
            header("Location:  ../admin/login_admin.php?error=Incorrect Email or Password");
            exit();
        }
    }
} else {
    header("Location:  ../admin/login_admin.php");
    exit();
}
?>
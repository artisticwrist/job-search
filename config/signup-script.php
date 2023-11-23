<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require "../connect/connect.php";

if (isset($_POST['submit'])) {

    // Cross-checking user password and re-enter password input
    $password = $_POST['password'];
    $passwordCheck = $_POST['password-check'];

    if (strlen($password) <= 6) {
        header("Location: ../pages/signup.php?notMatch=password must contain more than 7 values");
    } else {
        if ($password === $passwordCheck) {

            $employer_status = $_POST['employer-status'];
            $full_name = $_POST['full-name'];
            $email = $_POST['email'];
            $subscribe_status = 0;
            $initialReferral = $_POST['referral'];

            //INITIAL STATE OF REFERRED USER
            $approved = 0;

            if (empty($full_name)) {
                header("Location: ../pages/signup.php?notMatch=please input full name");
            } elseif (empty($email)) {
                header("Location: ../pages/signup.php?notMatch=please input valid email");
            } else {

                // Generate a unique referral code
                do {
                    $bytes = random_bytes(16);
                    $referral_code = bin2hex($bytes);

                    // Check if the generated referral code already exists in the database
                    $checkReferralCode = "SELECT * FROM `users` WHERE referral_code='$referral_code'";
                    $resultReferralCode = mysqli_query($con, $checkReferralCode);
                    $countReferralCode = mysqli_num_rows($resultReferralCode);
                } while ($countReferralCode > 0);

                // Get referring email using the generated referral code
                $getReferringEmail = "SELECT email FROM `users` WHERE referral_code = '$initialReferral'";
                $resultReferringEmail = mysqli_query($con, $getReferringEmail);
                $rowReferringEmail = mysqli_fetch_assoc($resultReferringEmail);
                $referringEmail = $rowReferringEmail['email'];

                // Insert into 'referrals' table
                $insertReferral = "INSERT INTO referrals(referring_email, new_user_email, approved) VALUES ('$referringEmail', '$email', '$approved')";
                mysqli_query($con, $insertReferral);

                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users(full_name, email, employer_status, subscribe_status, referral_code, password) 
                        VALUES ('$full_name', '$email', '$employer_status', '$subscribe_status', '$referral_code', '$passwordHash')";
                if ($con->query($sql)) {
                    header("Location: ../pages/login.php?signup-msg=sign up successful !!. please login");
                } else {
                    die(mysqli_error($con));
                }
            }
        } else {
            header("Location: ../pages/signup.php?notMatch=passwords are not equal, try again.");
        }
    }
}
?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require "../connect/connect.php";

if(isset($_POST['submit'])){

    //cross checking user password and re enter password input

        
        $password = $_POST['password'];
        $passwordCheck = $_POST['password-check'];
        if(strlen($password) <= 6){
                header("Location: ../pages/signup.php?notMatch= password must contain more than 7 values"); 
        }else{
             if($password === $passwordCheck){
                
                $employer_status = $_POST['employer-status'];
                $full_name = $_POST['full-name'];
                $email = $_POST['email'];
                $subscribe_status = 0;
                
                if(empty($full_name)){
                        header("Location: ../pages/signup.php?notMatch= please input full name");   
                 }elseif(empty($email)){
                        header("Location: ../pages/signup.php?notMatch= please input valid email"); 
                 }else{

                        $checkUser = "SELECT * from `users` where email='$email'";
                        $result=mysqli_query($con,$checkUser);
                        $count = mysqli_num_rows($result);


                        if($count>0){
                                header("Location: ../pages/signup.php?notMatch=Email already exist");
                        }else{
                                $passwordHash = password_hash($password, PASSWORD_DEFAULT);     
                                $sql = "INSERT INTO users(full_name,email,employer_status,subscribe_status,password) VALUES('$full_name', '$email', '$employer_status', '$subscribe_status','$passwordHash')";
                                if($con->query($sql)){
                                        header("Location: ../pages/login.php?signup-msg= sign up successful !!. please login");
                                }else{
                                die(mysqli_error($con));
                                }
                        }

                }

                
             }else{
                
                header("Location: ../pages/signup.php?notMatch= passwords are not equal, try again.");
                  
             }
        


        }

}

?>
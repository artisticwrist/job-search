<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require "../connect/connect.php";

if(isset($_POST['submit'])){

    //cross checking user password and re enter password input

        
        $password = $_POST['password'];
        $passwordCheck = $_POST['password-check'];
        if(strlen($password) <= 6){
                header("Location: ../pages/create-admin.php?notMatch= password must contain more than 7 values"); 
        }else{
             if($password === $passwordCheck){
                
                $username = $_POST['username'];
                $email = $_POST['email'];
                
                if(empty($username)){
                        header("Location: ../pages/create-admin.php.php?notMatch= please input full name");   
                 }elseif(empty($email)){
                        header("Location: ../pages/create-admin.php?notMatch= please input valid email"); 
                 }else{

                        $checkUser = "SELECT * from `admin_log` where email='$email'";
                        $result=mysqli_query($con,$checkUser);
                        $count = mysqli_num_rows($result);


                        if($count>0){
                                header("Location: ../pages/create-admin.php?notMatch=Email already exist");
                        }else{
                                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                                $employer_status = 1;
                                $subscribe_status = 1;     
                                $sql = "INSERT INTO admin_log(username,email,password,employer_status,subscribe_status) VALUES('$username', '$email','$passwordHash'.'$employer_status','$subscribe_status')";
                                if($con->query($sql)){
                                   header("Location: ../pages/admin.php?admincreate=1");
                                }else{
                                die(mysqli_error($con));
                                }
                        }

                }

                
             }else{
                
                header("Location: ../pages/create-admin.php?notMatch= passwords are not equal, try again.");
                  
             }
        


        }

}

?>
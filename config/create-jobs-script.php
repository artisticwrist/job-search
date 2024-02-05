<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
require "../config/connect/connect.php";

    


if(isset($_POST['submit'])){


    if(empty($_POST['title']) || empty($_POST['company']) || empty($_POST['job_type']) || empty($_POST['location']) || empty($_POST['category']) || empty($_POST['summary']) || empty($_POST['salary']) || empty($_POST['specification']) || empty($_POST['requirements']) || empty($_POST['responsibility']) || empty($_POST['qualification']) || empty($_POST['exp_level']) || empty($_POST['years_of_exp']) || empty($_POST['how_to_apply'])){
        header("Location: ../pages/create-jobs-form.php?errform=1");
    }else{
        $title = $_POST['title'];
        $company = $_POST['company'];
        $job_type = $_POST['job_type'];
        $category = $_POST['category'];
        $summary = $_POST['summary'];
        $salary = $_POST['salary'];
        $specification = $_POST['specification'];
        $requirements = $_POST['requirements'];
        $responsibility = $_POST['responsibility'];
        $qualification = $_POST['qualification'];
        $exp_level = $_POST['exp_level'];
        $years_exp = $_POST['years_of_exp'];
        $company_logo = 'profile.jpg';
        $how_to_apply = $_POST['how_to_apply'];
        $outsideNigeria = $_POST['outside-nigeria'];
        $status = $_GET['status'];


        
            // SETS LOCATION IF USER INPUTS A LOCATION OUTISDE NIGERIA OR PICKS AN OPTION AMONG THE 37 STATES OF NIGERIA

            if(!empty($outsideNigeria)){
                $location = $outsideNigeria;
                
            }else{
                $location = $_POST['location'];
            }




            

        $sql = "INSERT INTO jobs(job_name, company,job_type, job_location, category,summary, salary, specification,requirements,
        responsibility,qualification,exp_level,years_of_exp,company_logo,how_to_apply, status)
        VALUES('$title','$company','$job_type','$location','$category','$summary','$salary','$specification','$requirements','$responsibility','$qualification','$exp_level
        ','$years_exp ','$company_logo','$how_to_apply' , '$status')";

        $query = mysqli_query($con, $sql);

        if($query){
            header("Location: ../pages/create-jobs-form.php?successmsg=1&admin=$status");
        }else{
            echo "my sqli error";
        }
    }


}
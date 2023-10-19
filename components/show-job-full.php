<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require "../connect/connect.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/style.css'>
</head>

<body style="padding: 20px;">
    <?php
    require "../components/nav.php";
    ?>
    <?php

$jobID = $_GET['job_id'];

$sql = "SELECT * FROM `jobs` WHERE job_id=$jobID";
$result = mysqli_query($con, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $job_name = $row['job_name'];
        $company = $row['company'];
        $job_type = $row['job_type'];
        $location = $row['job_location'];
        $category = $row['category'];
        $summary = $row['summary'];
        $date_uploaded = $row['date_uploaded'];
        $salary = $row['salary'];
        $specification = $row['specification'];
        $requirements = $row['requirements'];
        $responsibility = $row['responsibility'];
        $exp_level = $row['exp_level'];
        $yearsExp = $row['years_of_exp'];
        $qualification = $row['qualification'];
        $company_logo = $row['company_logo'];
        $apply = $row['how_to_apply'];
        echo '
                <div class="job-box" name="showFullDetail">
                <div class="premium-free">'.$job_type.'</div>
                    <div class="job-flex">
                        <h1 style="width:70%;">' .$job_name.'</h1>
                        <p class="company">';

                        if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
                            echo $company;
                        } else {
                            echo null;
                            
                        }   
                             
                        echo '</p>
                        <div class="job-flex-items">
                            <div class="flex">
                                <p>'.$location.'</p>
                            </div>
                            <div class="flex">
                                <p>'.$specification.'</p>
                            </div>
                            <div class="flex">
                                <p>'.$salary.'</p>
                            </div>
                        </div>
                        <p class="company">Job function : '.$category.'</p>
                    </div>

                    <hr>

                    <p class="time-posted">'.$date_uploaded.'</p>

                    <hr>

                    <div class="job-flex" style="display: flex; align-items: center;">
                        <div class="company-logo">
                            <img src="" alt="">
                        </div>
                        <div class="job-summary">
                            <p>'.$summary.'</p>
                        </div>
                    </div>

                    <hr>

                    <div class="job-flex">
                        <h3 class="company">Requirements</h3>
                        <p class="company">'.$requirements.'</p>
                    </div>

                    <hr>

                    <div class="job-flex">
                        <h3 class="company">Responsilibity</h3>
                        <p class="company">'.$responsibility.'</p>
                    </div>
                    <hr>

                    <div class="job-flex">
                        <h3 class="company">How to apply</h3>
                        <p class="company">';

                        if($_SESSION['employer_status'] === 1){
                            echo "<button class='explore-btn'><a href='../pages/signup.php'>sign up for premium</a></button>";
                        }else{
                            if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
                                echo $apply;
                            } else {
                                if($job_type == 'premium'){
                                    echo "<button class='explore-btn'><a href='../pages/signup.php'>sign up for premium</a></button>";                   
                                }else{
                                    echo $apply;  
                                }
                            }  
                        }
  

                        echo '</p>
                    </div>
                </div>

        ';
    }
}

?>
    <?php
    require "../components/footer.php";
    ?>
</body>

</html>
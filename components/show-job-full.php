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
if(isset($_SESSION['employer_status'])){
    $session = $_SESSION['employer_status'];
}else{
    $session = "not set";
}


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

        <div class="job-box job-width job-height-full">

            <p class="company-name">';

                if($job_type == 'free'){
                echo $company;
                }elseif(isset($_SESSION['email']) && isset($_SESSION['password'])){
                    if($_SESSION['subscribe_status'] == 0){
                        echo null;
                    }else{
                        if($_SESSION['employer_status'] == 0){
                             echo $company;
                        }else{
                            echo null;
                        }
                    }
                }else{
                echo null;
                }
                echo '</p>
                <div class="view-more">
                    <h1 class="job-name">'.$job_name.'</h1>
                    <img src="../images/img.jpg" alt="" class="company-logo">
                </div>
            <div class="view-more">
                <p class="salary">'.$salary.'</p>
                <p>'.$location.'</p>
            </div>
            <p class="summary">
                '.$summary.'
            </p>
            <h1 class="job-name">Requirement</h1>
            <p class="summary">
                '.$requirements.'
            </p>
            <h1 class="job-name">Responsibilities</h1>
            <p class="summary">
                '.$responsibility.'
            </p>
            <div class="view-more">
              <div><h1 class="job-name">How to apply</h1>';
            if($job_type === 'free'){
                echo $apply;
            }elseif(isset($_SESSION['email']) && isset($_SESSION['password'])){
                if($_SESSION['subscribe_status'] == 0){
                    echo "<button>
                    <a href='../pages/subscribe.php'>subscribe</a>
                </button>";
                }elseif($_SESSION['subscribe_status'] == 1){
                    echo $apply;
                }else{
                    if($_SESSION['employer_status'] == 0){
                        echo "
                        <button>
                            <a href='../pages/signup.php'>sign up for premium</a>
                        </button>";
                    }else{
                        echo $apply;
                    }
                }
            }else{
                echo null;
            }
                echo '</div><p>'.$job_type.'</p>
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
<!-- 
if(isset($_SESSION['email']) && isset($_SESSION['password'])){ -->



<!-- 
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
            if(isset($_SESSION['email']) && isset($_SESSION['password'])){
            echo "
            <button class='explore-btn'>
                <a href='../config/logout.php'>sign up for premium</a>
            </button>
            ";
            }else{
            echo "
            <button class='explore-btn'>
                <a href='../pages/signup.php'>sign up for premium</a>
            </button>";
            }

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


            echo '
        </p>
    </div>
</div> -->
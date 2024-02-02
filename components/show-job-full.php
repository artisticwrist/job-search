<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require "../config/connect/connect.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
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
                echo ' | '.$category.'</p>
                <div class="view-more">
                    <h1 class="job-name">'.$job_name.'</h1>
                    <img src="../resources/images/upload" alt="" class="company-logo">
                </div>
            <div class="view-more">
                <p class="salary">'.$salary.' | '.$specification.'</p>
                <p>'.$location.' | '.$date_uploaded.'</p>
            </div>
            <p class="summary">
                '.$summary.'
            </p>
            <h1 class="job-name">Years of EXperience</h1>
            <p class="summary">
                '.$yearsExp.'
            </p>
            <h1 class="job-name">Experience Level</h1>
            <p class="summary">
                '.$exp_level.'
            </p>
            <h1 class="job-name">Qualification</h1>
            <p class="summary">
                '.$qualification.'
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
                echo '</div><p class="summary">'.$job_type.'</p>
            </div>

            <button class="btn btn-primary" style="width:150px;"><a class="text-white text-decoration-none" href="../pages/jobs.php">Back to Jobs</a></button>
        </div>

        ';
    }
}

?>
    <?php
    require "../components/footer.php";
    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>


</html>
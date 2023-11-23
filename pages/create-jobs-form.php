<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require "../connect/connect.php";
    session_start();

    
    $successMsg = 0;
    if(isset($_GET['successmsg'])){
        $successMsg = $_GET['successmsg'];
    }

    if(isset($_SESSION['employer_status']) == 1){
        $admin = 0;
        if(isset($_GET['admin'])){
            $admin = true;
        }

        

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="create-job-form">

    <form action="../components/create-jobs-script.php?admin=<?php $admin ?>" method="POST">
        <div class="pagination">
            <div class="pagination-items">
                <div class="item" onclick="stepOne()">
                    <p>1</p>
                    <p>Create Job Listing</p>
                </div>
            </div>
            <div class="pagination-items">
                <div class="item" onclick="stepTwo()">
                    <p>2</p>
                    <p>Preview Listing</p>
                </div>
            </div>
            <div class="pagination-items">
                <button class="item" type="submit" name="submit">
                    <p>3</p>
                    <p>Submit Opening</p>
                </button>
            </div>
        </div>

        <?php
        if($successMsg == 0){
            
            if(isset($_GET['errform']) == 1){
                echo '
                <p style="color: red; opacity:0.8;">Please fill in form details</p>
                ';
            }
            echo '        
            <div class="jobs-container">
            <div class="display-non" id="create-job-form-fill">

                <div class="creat-job-form-fill">

                    <h1>Job Information</h1>
                    <div class="form-create">

                        <div class=" input-box">
                            <p>Job Title</p>
                            <input type="text" placeholder="Job title" name="title">
                        </div>

                        <div class=" input-box">
                            <p>Company</p>
                            <input type="text" placeholder="company" name="company">
                        </div>

                        <div class="input-box">
                            <p>Job type</p>
                            <select name="job_type">
                            <option value="free">Free</option>
                            <option value="premium">Premium</option>
                            </select>
                        </div>

                        <div class="input-box">
                            <p>Category</p>
                            <input type="text" placeholder="Category" name="category">
                        </div>
                        
                        <div class="input-box">
                            <p>Location</p>
                            <input type="text" placeholder="Location" name="location">
                        </div>
                        
                        <div class="input-box">
                            <p>Specification</p>
                            <select name="specification">
                            <option value="full-time">Full time</option>
                            <option value="part-time">Part time</option>
                            <option value="contract">Contract</option>
                            <option value="remote">Remote</option>
                            </select>
                        </div>

                        <div class="input-box">
                            <p>Salary Range</p>
                            <input type="text" placeholder="Salary" name="salary">
                        </div>
                    </div>
                </div>

                <div class="creat-job-form-fill">
                    <h1>Requirement & Responsibility</h1>
                    <div class="form-create">


                        <div class="input-box">
                            <p>Requirements</p>
                            <textarea id="" cols="30" rows="10" name="requirements"></textarea>
                        </div>
                        <div class="input-box">
                            <p>Responsibility</p>
                            <textarea id="" cols="30" rows="10" name="responsibility"></textarea>
                        </div>
                    </div>
                </div>


                <div class="creat-job-form-fill">
                    <h1>More Requirements</h1>
                    <div class="form-create">


                        <div class="input-box">
                            <p>Experience Level</p>
                            <input type="text" placeholder="Junior, Senior, Intermediate" name="exp_level">
                        </div>
                        <div class="input-box">
                            <p>Cert Qualification</p>
                            <input type="text" placeholder="HND, Bsc, Diploma" name="qualification">
                        </div>
                        <div class="input-box">
                            <p>Years of experience</p>
                            <input type="text" placeholder="5-7 years" name="years_of_exp">
                        </div>
                    </div>
                </div>


                <div class="creat-job-form-fill">
                    <h1>Summary</h1>
                    <div class="form-create">


                        <div class="input-box">
                            <p>Summary</p>
                            <textarea id="" cols="30" rows="10" name="summary" placeholder="summary"></textarea>
                        </div>
                        <div class="input-box">
                            <p>How To Apply</p>
                            <input type="text" placeholder="How to apply. Attach link if needed." name="how_to_apply">
                        </div>
                        <div class="input-box">
                            <p>Compnay Logo (optional)</p>
                            <input type="file" placeholder="How to apply. Attach link if needed.">
                        </div>
                    </div>
                </div>
            </div>

            </div>
                ';
        }elseif($successMsg == 1) {
            echo '        
            <div class="sucess-form">
            <h2>Applicaion created successfully !</h2>
            <div class="btn-box">
                <button class="btn btn-primary"><a class="text-white text-decoration-none" href="../pages/create-jobs-form.php">New Job</a></button>
            </div>
            </div>';
        }
        ?>

        <div class=" job-box job-height-full display-none" id="review-job-form">

            <p class="company-name">company</p>
            <div class="view-more">
                <h1 class="job-name">$job_name</h1>
                <img src="../images/img.jpg" alt="" class="company-logo">
            </div>
            <div class="view-more">
                <p class="salary">$salary</p>
                <p>$location</p>
            </div>
            <p class="summary">
                $summary
            </p>
            <h1 class="job-name">Requirement</h1>
            <p class="summary">
                $requirements
            </p>
            <h1 class="job-name">Responsibilities</h1>
            <p class="summary">
                $responsibility
            </p>
            <div class="view-more">
                <div>
                    <h1 class="job-name">How to apply</h1>
                </div>
                <p>$job_type</p>
            </div>
        </div>



    </form>



    <script src="../js/app.js"></script>
</body>

</html>

<?php

}else{
    echo "not permitted to view this page";
}
?>
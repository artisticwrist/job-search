<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require "../config/connect/connect.php";
    session_start();

    
    $successMsg = 0;
    if(isset($_GET['successmsg'])){
        $successMsg = $_GET['successmsg'];
    }

    if(isset($_SESSION['employer_status']) == 1){
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

                $how_to_apply = $_POST['how_to_apply'];
                $outsideNigeria = $_POST['outside-nigeria'];
                $status = 0;
        
                // Handling logo upload
				$targetDirectory = 'C:\xampp\htdocs\job-search\resources\images\uploads\upload';
				$company_logo_name = basename($_FILES['logo']['name']);
				$company_logo_path = $targetDirectory . $company_logo_name;

				move_uploaded_file($_FILES['logo']['tmp_name'], $company_logo_path);
        
        
                
                    // SETS LOCATION IF USER INPUTS A LOCATION OUTISDE NIGERIA OR PICKS AN OPTION AMONG THE 37 STATES OF NIGERIA
        
                    if(!empty($outsideNigeria)){
                        $location = $outsideNigeria;
                        
                    }else{
                        $location = $_POST['location'];
                    }
        
        
                $sql = "INSERT INTO jobs(job_name, company,job_type, job_location, category,summary, salary, specification,requirements,
                responsibility,qualification,exp_level,years_of_exp,company_logo,how_to_apply, status)
                VALUES('$title','$company','$job_type','$location','$category','$summary','$salary','$specification','$requirements','$responsibility','$qualification','$exp_level
                ','$years_exp ','$company_logo_name','$how_to_apply' , '$status')";
        
                $query = mysqli_query($con, $sql);
        
                if($query){
                    header("Location: ../pages/create-jobs-form.php?successmsg=1");
                }else{
                    echo "my sqli error";
                }
            }
        }
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

<body class="create-job-form">

    <h1>CREATE JOB</h1>
    <p style="color: silver;">KIndly fill in all fields details</p>

    <form action="../pages/create-jobs-form.php" method="POST">
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
            <div class="jobs-container" style=" flex-direction:column; align-items:center;">
            <div id="create-job-form-fill" >

                <div class="creat-job-form-fill">

                    <h1>Job Information</h1>
                    <div class="form-create">

                        <div class=" input-box">
                            <p>Job Title</p>
                            <input type="text" placeholder="Job title" class="input-title" name="title">
                        </div>

                        <div class=" input-box">
                            <p>Company</p>
                            <input type="text" placeholder="company" class="input-company" name="company">
                        </div>

                        <div class="input-box">
                            <p>Job type</p>
                            <select name="job_type" class="input-job-type">
                            <option value="free">Free</option>
                            <option value="premium">Premium</option>
                            </select>
                        </div>

                        <div class="input-box">
                            <p>Category</p>
                            <select name="category" id="" class="input-category">
                                <option value="arts">Arts</option>
                                <option value="business">Business</option>
                                <option value="communications">Communications</option>
                                <option value="education">Education</option>
                                <option value="healthcare">Healthcare</option>
                                <option value="hospitality">Hospitality</option>
                                <option value="information-technology">Information Technology</option>
                                <option value="law">Law Enforcement</option>
                                <option value="sales-marketing">Sales & Marketing</option>
                                <option value="science">Science</option>
                                <option value="transportation">Transportation</option>
                            </select>
                        </div>
                        
                        <div class="input-box">
                            <p>Location (within Nigeria)</p>
                            <select name="location" id="" class="input-location">
                                <option value="null"> </option>
                                <option value="abia">Abia</option>
                                <option value="abuja">Abuja</option>
                                <option value="adamawa">Adamawa</option>
                                <option value="akwa-ibom">Akwa Ibom</option>
                                <option value="anambra">Anambra</option>
                                <option value="bauchi">Bauchi</option>
                                <option value="bayelsa">Bayelsa</option>
                                <option value="benue">Benue</option>
                                <option value="borno">Borno</option>
                                <option value="cross-river">Cross River</option>
                                <option value="delta">Delta</option>
                                <option value="ebonyi">Ebonyi</option>
                                <option value="edo">Edo</option>
                                <option value="ekiti">Ekiti</option>
                                <option value="enugu">Enugu</option>
                                <option value="gombe">Gombe</option>
                                <option value="imo">Imo</option>
                                <option value="jigawa">Jigawa</option>
                                <option value="kaduna">Kaduna</option>
                                <option value="kano">Kano</option>
                                <option value="katsina">Katsina</option>
                                <option value="kebbi">Kebbi</option>
                                <option value="kogi">Kogi</option>
                                <option value="kwara">Kwara</option>
                                <option value="lagos">Lagos</option>
                                <option value="nasarawa">Nasarawa</option>
                                <option value="niger">Niger</option>
                                <option value="ogun">Ogun</option>
                                <option value="ondo">Ondo</option>
                                <option value="osun">Osun</option>
                                <option value="oyo">Oyo</option>
                                <option value="plateau">Plateau</option>
                                <option value="rivers">Rivers</option>
                                <option value="sokoto">Sokoto</option>
                                <option value="taraba">Taraba</option>
                                <option value="yobe">Yobe</option>
                                <option value="zamfara">Zamfara</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <p>Location (outisde Nigeria)</p>
                            <input type="text" placeholder="Only fill if location is outisde Nigeria" name="outside-nigeria" class="input-location">
                        </div>
                        
                        <div class="input-box">
                            <p>Specification</p>
                            <select name="specification" class="input-specification">
                            <option value="full-time">Full time</option>
                            <option value="part-time">Part time</option>
                            <option value="contract">Contract</option>
                            <option value="remote">Remote</option>
                            </select>
                        </div>

                        <div class="input-box">
                            <p>Salary Range</p>
                            <input type="text" placeholder="Salary" name="salary" class="input-salary">
                        </div>
                    </div>
                </div>

                <div class="creat-job-form-fill">
                    <h1>Requirement & Responsibility</h1>
                    <div class="form-create">
                        <div class="input-box">
                            <p>Requirements</p>
                            <textarea id="" class="input-requirements" cols="30" rows="10" name="requirements"></textarea>
                        </div>
                        <div class="input-box">
                            <p>Responsibility</p>
                            <textarea id="" cols="30" class="input-responsibility" rows="10" name="responsibility"></textarea>
                        </div>
                    </div>
                </div>


                <div class="creat-job-form-fill">
                    <h1>More Requirements</h1>
                    <div class="form-create">


                        <div class="input-box">
                            <p>Experience Level</p>
                            <select name="exp_level" class="input-exp-level" id="">
                                <option value="no-exp">No experience</option>
                                <option value="internship-graduate">Internship & Graduate</option>
                                <option value="entry-level">Entry level</option>
                                <option value="mid-level">Mid level</option>
                                <option value="senior-level">Senior level </option>
                                <option value="executive-level">EXecutive level</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <p>Cert Qualification</p>
                            <select class="input-qualification" name="qualification" id="">
                            <option value="no-exp">No experience</option>
                            <option value="internship-graduate">Internship & Graduate</option>
                            <option value="entry-level">Entry level</option>
                            <option value="mid-level">Mid level</option>
                            <option value="senior-level">Senior level </option>
                            <option value="executive-level">EXecutive level</option>
                        </select>
                        </div>
                        <div class="input-box">
                            <p>Years of experience</p>
                            <select class="input-years-exp" name="years_of_exp">
                                <option selected>Choose...</option>
                                <option value="0-1yr">0-1yr</option>
                                <option value="1-3years">1-3years</option>
                                <option value="3-5years">3-5years</option>
                                <option value="5years above">5years above</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="creat-job-form-fill">
                    <h1>Summary</h1>
                    <div class="form-create">


                        <div class="input-box">
                            <p>Summary</p>
                            <textarea id="" cols="30" rows="10" name="summary" placeholder="summary" class="input-summary"></textarea>
                        </div>
                        <div class="input-box">
                            <p>How To Apply</p>
                            <input type="text" placeholder="How to apply. Attach link if needed." name="how_to_apply" class="input-apply">
                        </div>
                        <div class="input-box">
                            <p>Compnay Logo (optional)</p>
                            <input type="file" placeholder="How to apply. Attach link if needed.">
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-dark btn-next " style="margin: 20px;" onclick="stepTwo()">
                Next
            </button>
            </div>
                ';
        }elseif($successMsg == 1) {
            echo '        
            <div class="sucess-form">
            <h2>Applicaion created successfully !</h2>
            <div class="btn-box">
                <button class="btn btn-primary"><a class="text-white text-decoration-none" href="../pages/create-jobs-form.php">New Job</a></button>
            </div>
            </div>
            <button class="btn btn-primary"><a class="text-white text-decoration-none" href="../pages/jobs.php">Home</a></button>';
            
        }
        ?>



        <div class="job-box job-width job-height-full display-none" id="review-job-form">
            <p class="company-name">comapny: <span id="company-name"></span></p>
            <p>category: <span id="category"></span></p>
            <div class="view-more">
                <h1 class="job-name" id="job-name"></h1>
                <img src="../images/img.jpg" alt="" class="company-logo">
            </div>
            <div class="view-more">
                <p class="company-name">salary: <span id="salary"></span></p>

                <p class="company-name">location: <span id="location"></span></p>
            </div>
            <p>specification: <span id="specification"></span></p>
            <p class="summary" id="summary"></p>
            <h1 class="job-name">Years of EXperience</h1>
            <p class="summary" id="years-exp"></p>
            <h1 class="job-name">Experience Level</h1>
            <p class="summary" id="exp-level"></p>
            <h1 class="job-name">Qualification</h1>
            <p class="summary" id="qualification"></p>
            <h1 class="job-name">Requirement</h1>
            <p class="summary" id="requirement"></p>
            <h1 class="job-name">Responsibilities</h1>
            <p class="summary" id="responsibility"></p>
            <div class="view-more">
                <div>
                    <h1 class="job-name">How to apply</h1>
                    <p class="summary" id="apply"></p>
                </div>
                <p class="summary" id="job-type"></p>
            </div>
        </div>

        <button type="submit" name="submit" class="btn btn-dark btn-submit display-none" style="margin: 20px;">
            Create Job
        </button>

        </div>
        </div>
    </form>



    <script src="../resources/js/app.js"></script>
</body>

</html>

<?php

}else{
   header("Location: ../pages/error.php");
}
?>
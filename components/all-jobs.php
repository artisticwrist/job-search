<?php

$sql = "SELECT * FROM `jobs` ORDER BY RAND()";
$result = mysqli_query($con, $sql);
$job = "hello";

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $job_id = $row['job_id'];
        $job_name = $row['job_name'];
        $company = $row['company'];
        $job_type = $row['job_type'];
        $location = $row['job_location'];
        $category = $row['category'];
        $summary = $row['summary'];
        $date_uploaded = $row['date_uploaded'];
        $salary = $row['salary'];
        $specification = $row['specification'];
        $company_logo = $row['company_logo'];

        echo '
        <div class="job-box">
            <div class="premium-free">'.$job_type.'</div>
            <div class="job-flex">
                <h1 style="width:70%;">' . $job_name . '</h1>
                <p>';

                if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
                    echo $company;
                }elseif ($job_type == 'premium') {
                    echo null;
                }elseif ($job_type == 'free') {
                    echo $company;
                } else {
                    echo null;
                }           
                echo '</p>
                <div class="job-flex-items">
                    <div class="flex">
                        <p>' . $location . '</p>
                    </div>
                    <div class="flex">
                        <p>' . $specification . '</p>
                    </div>
                    <div class="flex">
                        <p>' . $salary . '</p>
                    </div>
                </div>
                <p>Job function : ' . $category . '</p>
            </div>

            <hr>

            <p class="time-posted">' . $date_uploaded . '</p>

            <hr>

            <div class="job-flex" style="display: flex; align-items: center;">
                <div class="company-logo">
                    <img src="" alt="">
                </div>
                <div class="job-summary">
                    <p>' . $summary . '</p>
                </div>
            </div>

            <button class="view-job-btn"><a href="../components/show-job-full.php?job_id=' . $job_id . '">View Job</a></button>
        </div>
        ';
    }
}
?>
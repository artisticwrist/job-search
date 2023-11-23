<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$sql = "SELECT * FROM `jobs` WHERE status = 1 ORDER BY RAND() ";
$result = mysqli_query($con, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $job_id = $row['job_id'];
        $job_name = $row['job_name'];
        $company = $row['company'];
        $job_type = $row['job_type'];
        $location = $row['job_location'];
        $summary = $row['summary'];
        $salary = $row['salary'];
        $company_logo = $row['company_logo'];

        // Limit summary to 30 words
        $summary = implode(' ', array_slice(str_word_count($summary, 1), 0, 30));

        echo '
            <div class="job-box job-height">
                <p class="company-name">';

        if ($job_type == 'free') {
            echo $company;
        } elseif (isset($_SESSION['email']) && isset($_SESSION['password'])) {
            if ($_SESSION['subscribe_status'] == 0) {
                echo null;
            } else {
                if ($_SESSION['employer_status'] == 0) {
                    echo $company;
                } else {
                    echo null;
                }
            }
        } else {
            echo null;
        }
        echo '</p>
                <div class="view-more">
                    <h5 class="job-name">' . $job_name . '</h5>
                    <img src="../images/img.jpg" alt="" class="company-logo">
                </div>
               <div class="view-more">
                    <p class="salary">' . $salary . '</p>
                    <p>' . $location . '</p>
                </div>
                <p class="summary">
                ' . $summary . '...
                </p>
                <div class="view-more">
                    <button class="btn btn-primary"><a href="../components/show-job-full.php?job_id=' . $job_id . '">View more</a></button>
                    <p>' . $job_type . '</p>
                </div>
            </div>
        ';
    }
}
?>
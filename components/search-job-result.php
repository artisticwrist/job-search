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
    <title>Job Search</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- NAVIGATION BAR -->
    <?php
    include '../components/nav.php';
    ?>

    <section class="free-jobs">
        <?php
    if (isset($_POST['submit'])) {
        $job_name = $_POST['job_title'];
        $job_category = $_POST['categories'];
        $job_exp_level = $_POST['experience'];
        $job_location = $_POST['locations'];

        // Use prepared statements to prevent SQL injection
        $sql = "SELECT * FROM jobs WHERE job_name = ? AND category = ? AND job_location = ? AND exp_level = ?";
        $stmt = mysqli_prepare($con, $sql);

        if ($stmt) {
            // Bind parameters
            mysqli_stmt_bind_param($stmt, "ssss", $job_name, $job_category, $job_location, $job_exp_level);

            // Execute the query
            mysqli_stmt_execute($stmt);

            // Get the result set
            $result = mysqli_stmt_get_result($stmt);

            if ($result) {
                if(mysqli_num_rows($result) > 0){
                               while ($row = mysqli_fetch_assoc($result)) {

                    $job_id = $row['job_id'];
                    $job_title = $row['job_name'];
                    $company = $row['company'];
                    $job_type = $row['job_type'];
                    $location = $row['job_location'];
                    $summary = $row['summary'];
                    $salary = $row['salary'];
                    $category = $row['category'];
                    $exp_level = $row['exp_level'];
                    $company_logo = $row['company_logo'];
                    $date_uploaded = $row['date_uploaded'];
                    $specification = $row['specification'];
                    $requirements = $row['requirements'];
                    $responsibility = $row['responsibility'];
                    $yearsExp = $row['years_of_exp'];
                    $qualification = $row['qualification'];
                    $apply = $row['how_to_apply'];


                    // Limit summary to 30 words
                    $summary = implode(' ', array_slice(str_word_count($summary, 1), 0, 30));
                    echo '
                        <div class="job-box job-height">
                            <p class="company-name">' . $company . '</p>
                            <div class="view-more">
                                <h5 class="job-name">' . $job_name . '</h5>
                                <img src="../images/img.jpg" alt="" class="company-logo">
                            </div>
                            <div class="view-more">
                                <p class="salary">' . $salary . '</p>
                                <p>' . $location . '</p>
                            </div>
                            <p class="summary">' . $summary . '...</p>
                            <div class="view-more">
                                <button class="btn btn-primary"><a href="../components/show-job-full.php?job_id=' . $job_id . '">View more</a></button>
                                <p>' . $job_type . '</p>
                            </div>
                        </div>
                    ';
                }     
                }else{
                    echo "<p style='margin:50px 0px;'>Search not found</p>";
                }

            } else {
                echo "Query failed: " . mysqli_error($con);
            }

            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            echo "Prepare statement failed: " . mysqli_error($con);
        }
    }
    ?>
    </section>



    <!-- FOOTER BAR -->
    <?php
    include '../components/footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
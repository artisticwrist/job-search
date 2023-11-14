<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);




// show feedback mesages in admin page
$sql = "SELECT * FROM `feedback`";
$result = mysqli_query($con, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $full_name = $row['full_name'];
        $email = $row['email'];
        $feedback = $row['feedback'];
        $date_created = $row['date_created'];
        $date_created = date("jS M, Y.", strtotime($date_created));

        
        echo '
                    <div class="job-box job-height">
                        <div class="view-more">
                            <h1 class="job-name">'.$full_name.'</h1>
                        </div>

                        <div class="view-more">
                            <p class="salary">'.$email.'</p>
                            <p>'.$date_created.'</p>
                        </div>
                        <p class="summary">
                            '.$feedback.'
                        </p>
                        <div class="view-more">
                            <button><a href="../components/show-job-full.php">Reply</a></button>
                            <p>Delete</p>
                        </div>
                    </div>
        ';
    }
}

?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require "../config/connect/connect.php";

// Establish MySQLi connection


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

    $sql = "SELECT * FROM `blogs` WHERE status = 1 ORDER BY RAND() LIMIT 3 ";
    $result = mysqli_query($con, $sql);

    if ($result  && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $blog_id = $row['id'];
            $blog_title = $row['blog_title'];
            $blog_category = $row['blog_category'];
            $blog_status = $row['status'];
            $blog_link = $row['blog_link'];
            $blog_thumbnail = $row['blog_thumbnail'];
            $uploaded_date = $row['uploaded_date'];


            // Limit summary to 30 words
            $blog_title = implode(' ', array_slice(str_word_count($blog_title, 1), 0, 30));

            echo '
            <div class="col-md-4 col-12">
                <div class="article_box">
                    <a href="'.$blog_link.'">
                        <img src="../resources/images/blog/blog'.$blog_thumbnail.'" alt="">
                        <div class="article_box-body">
                            <h1>'.$blog_title.'...</h1>
                            <p>'.$blog_category.'</p>
                        </div>
                    </a>
                </div>
            </div>
            ';
        }
    } else {
        echo '<div>No blogs available at the moment.</div>';
    }


?>
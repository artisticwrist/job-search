<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "job";

$con = mysqli_connect($host, $username, $password, $database);


error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `feedback` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
      
        echo "<script>alert('Feedback Deleted Successfully!');</script>";
        header("Location: /job-search/pages/admin.php");
    }else{
        die(mysqli_error($con));
    }
}


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

        <body>
                <div class=" feedback-box">
                    <div>
                        <p><b>'.$full_name.'</b></p>
                        <p style="font-size:13px;">'.$email.' | '.$date_created.'</p>
                    </div>

                    <div class="feedback-buttons">
                        <p>'.$feedback.'</p>
                        <div style="display: flex;">
                            <button><a href="">Respond</a></button>
                            <button><a href="../pages/admin/feedback.php?deleteid='.$id.'">Delete</a></button>
                        </div>
                        </dbiv>
                    </div>
                </div>
        </body>

        </html>

        ';
    }
}

?>
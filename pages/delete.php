<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['password']) ) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body class="error-page">
    <img src="../images/svg/close-dark.svg" alt="">
    <h1>Deleted Successfully !</h1>
    <p>
        <?php
        if(isset($_GET['delete'])){
            echo  $_GET['delete'];
        }else{
            echo null;
        }
        ?>
    </p>

    <p>Please go back to admin dashboard</p>
    <button><a href="../admin/super-admin.php">Dashboard</a></button>
</body>

</html>

<?php
}else{
    header("Location: ../pages/error.php");
}
?>
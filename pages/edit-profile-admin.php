<?php

ini_set('memory_limit', '256M');
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "../connect/connect.php";

session_start();

// DELETE USER FROM USERS TABLE

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `users` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
      
        echo "<script>alert('Account Deleted Successful!');</script>";
        echo "<script>setTimeout(function(){window.location.href='../pages/login.php?signup-msg=account deleted successfully'},500);</script>";
    }else{
        die(mysqli_error($con));
    }
}


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="edit-profile-page">



    <form action="../config/userUpdateAdminscript.php" method="post">
        <?php
    $currentUser = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id='$currentUser'";
    $gotResult = mysqli_query($con, $sql);

    if ($gotResult) {
        if (mysqli_num_rows($gotResult) > 0) {
            while ($row = mysqli_fetch_array($gotResult)) {

                $id = $row['id'];
                ?>
        <section class="edit">
            <img src="../images/img.jpg" alt="">
            <div class="edit-flex">
                <div class="box">
                    <p>Full Name</p>
                    <input type="text" value="<?php echo $row['full_name'] ?>" placeholder="Full Name" name="full_name">
                </div>
                <div class="box">
                    <p>Email</p>
                    <input type="email" value="<?php echo $row['email'] ?>" placeholder="Email" name="email" readonly>
                </div>
                <div class=" box">
                    <p>Password</p>
                    <input type="password" placeholder="Leave blank to keep the current password" name="password">
                </div>
            </div>
            <div class="edit-btn">
                <button style="background: #2f89fc;" type="submit" name="submit">Edit Profile</button>
                <button style="background: rgb(192, 70, 70);" type="button"><a
                        href="../pages/edit-profile.php?deleteid=<?php echo $id?>">Delete
                        Profile</a></button>
            </div>
        </section>
        <?php
            }
        }
    }
    ?>
    </form>


</body>

</html>
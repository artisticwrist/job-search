<?php

ini_set('memory_limit', '256M');
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "../config/connect/connect.php";

session_start();



$currentUser = $_SESSION['email'];
// DELETE USER FROM USERS TABLE

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `users` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
      
        echo "<script>alert('Account Deleted Successful!');</script>";
        
        echo "<script>setTimeout(function(){window.location.href='../pages/admin.php?'},300);</script>";
        session_unset();
        session_destroy();

    }else{
        die(mysqli_error($con));
    }
}
if (isset($_SESSION['email']) && isset($_SESSION['password']) ) {
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/css/style.css">
</head>

<body class="edit-profile-page">

    <img src="../resources/images/img.jpg" alt="" class="section-edit-form-img">
    <div class="section-edit-form">
        <form action="../config/userUpdatescript.php" method="post">
            <?php
                    $sql = "SELECT * FROM users WHERE email='$currentUser'";
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
                        <input type="text" value="<?php echo $row['full_name'] ?>" placeholder="Full Name"
                            name="full_name">
                    </div>
                    <div class="box">
                        <p>Email (can't edit)</p>
                        <input type="email" value="<?php echo $row['email'] ?>" placeholder="Email" name="email"
                            readonly>
                    </div>
                    <div class=" box">
                        <p>Password</p>
                        <input type="password" placeholder="Leave blank to keep the current password" name="password">
                    </div>
                    <div class="box">
                        <p>Referral Code</p>
                        <img class="copy-referral-code" src="../images/svg/copy.svg" onclick="copyReferralCode()"
                            alt="">
                        <input type="text" value="<?php echo $row['referral_code'] ?>" placeholder="Bank Name"
                            name="referral_code" readonly>
                    </div>
                    <div class="box">
                        <p>Bank Name</p>
                        <input type="text" value="<?php echo $row['bank_name'] ?>" placeholder="Bank Name"
                            name="bank_name">
                    </div>
                    <div class="box">
                        <p>Account Name</p>
                        <input type="text" value="<?php echo $row['account_name'] ?>" placeholder="Account Name"
                            name="account_name">
                    </div>
                    <div class="box">
                        <p>Account Type</p>
                        <select name="account_type" id="">
                            <option value="savings">Savings</option>
                            <option value="current">Current</option>
                        </select>
                    </div>
                    <div class=" box">
                        <p>Account Number</p>
                        <input type="number" value="<?php echo $row['account_number'] ?>" placeholder="Account Number"
                            name="account_number">
                    </div>
                </div>
                <div class="edit-btn">
                    <button style="background: #2f89fc;" type="submit" name="submit">Update Profile</button>
                    <button style="background: rgb(192, 70, 70);" type="button" name="button"><a
                            href="../pages/edit-profile.php?deleteid=<?php echo $id?>">Delete
                            Account</a></button>
                </div>
                <button type="button" class="btn-back" style="background: rgb(63, 63, 63);"><a
                        href="../pages/jobs.php">Back to Jobs</a></button>
            </section>
            <?php
                            }
                        }
                    }
                ?>
        </form>

    </div>

    <script src="../js/app.js"></script>
</body>

</html>
<?php
}else{
    header("Location: ../pages/error.php");
}
?>
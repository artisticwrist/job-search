<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    require "../components/nav.php";
    ?>
    <section class="find-job-section">
        <h1 id="find-job-main-header">Job search</h1>
        <p style="text-align: center;">Log in your account</p>
        <p style="color: royalblue; font-size:13px;margin:3px;">
            <?php
                if(isset($_GET['signup-msg'])){
                    echo  $_GET['signup-msg'];
                }elseif(isset($_GET['error'])){
                    echo $_GET['error'];
                }

                
            ?>
        </p>
        <!--log in user  -->
        <form action="../config/login-script.php" method="POST" class="fill-form">
            <input type="text" placeholder="email" name="email" class="text-input">
            <input type="password" placeholder="password" name="password" class="text-input">
            <button type="submit" name="submit">Log in</button>
            <div class="form-box">
                <div class="check-box">
                    <input type="checkbox" name="" id="">
                    <p>remember me</p>
                </div>
                <p><a href="">forgot password ?</a></p>
            </div>
        </form>
        <p>Login as <a href="../pages/adminLogin.php">admin</a></p>
    </section>
    <?php
    require "../components/footer.php";
    ?>
</body>

</html>
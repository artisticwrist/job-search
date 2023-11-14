<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up page</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body style="height: 100vh;display:flex; justify-content:center;align-items:center;flex-direction:column;">

    <section class="find-job-section">
        <h1 class="logo">Job search</h1>
        <p style="color: #40514e70;margin:5px;">Create Admin</p>
        <p style="color: red; font-size:13px;margin:3px;">
            <?php
                if(isset($_GET['notMatch'])){
                    echo  $_GET['notMatch'];
                }
            ?>
        </p>

        <form action="../config/new-admin.php" method="POST" class="fill-form">
            <input type="text" placeholder="Username" name="username" class="text-input">
            <input type="text" placeholder="Email" name="email" class="text-input">
            <input type="password" placeholder="Password (more than 7 values)" name="password" class="text-input">
            <input type="password" placeholder="Re enter password" name="password-check" class="text-input">
            <button name="submit" type="submit">create admin</button>
        </form>
    </section>

</body>

</html>
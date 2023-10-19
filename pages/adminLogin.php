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
        <p style="text-align: center;">Log in your admin account</p>
        <!--log in user  -->
        <form action="" class="fill-form">
            <input type="text" placeholder="admin email" class="text-input">
            <input type="password" placeholder="admin password" class="text-input">
            <button>Log in</button>
            <p>Login as <a href="../pages/login.php">user</a></p>
        </form>
    </section>
    <?php
    require "../components/footer.php";
    ?>
</body>

</html>
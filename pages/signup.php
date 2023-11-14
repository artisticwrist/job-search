<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up page</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    require "../components/nav.php";
    ?>
    <section class="find-job-section">
        <h1 class="logo">Job search</h1>
        <p style="color: #40514e70;margin:5px;">Sign up to join us now</p>
        <p style="color: red; font-size:13px;margin:3px;">
            <?php
                if(isset($_GET['notMatch'])){
                    echo  $_GET['notMatch'];
                }
            ?>
        </p>

        <form action="../config/signup-script.php" method="POST" class="fill-form">
            <input type="text" placeholder="full name" name="full-name" class="text-input">
            <input type="text" placeholder="email" name="email" class="text-input">
            <select name="employer-status" id="" class="signup-option">
                <option value="0">User</option>
                <option value="1">Employer</option>
            </select>


            <input type="password" placeholder="password (more than 7 values)" name="password" class="text-input">
            <input type="password" placeholder="re enter password" name="password-check" class="text-input">
            <button name="submit" type="submit">sign up</button>
        </form>
    </section>
    <?php
    require "../components/footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
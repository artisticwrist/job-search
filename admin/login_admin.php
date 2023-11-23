<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>




<body class="height:100vh;">

    <section class="find-job-section"
        style="flex-direction:column; height:94vh; display: flex; align-items: center;justify-content: center;">
        <h1 class="logo">Job search</h1>
        <p style="color: #40514e70; margin:5px;">Log in Admin</p>

        <!--log in user  -->
        <form action="../admin/login-admin-script.php" method="POST" class="fill-form">
            <input type="text" placeholder="Admin Email" name="email" class="text-input">
            <input type="password" placeholder="Admin password" name="password" class="text-input">
            <button type="submit" name="submit">Log in</button>
            <div class="form-box">
                <div class="check-box">
                    <input type="checkbox" name="" id="">
                    <p>remember me</p>
                </div>
                <p><a href="">forgot password ?</a></p>
            </div>
        </form>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
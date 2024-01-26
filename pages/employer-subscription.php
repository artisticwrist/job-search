<?php
session_start();


    if (isset($_SESSION['email']) && isset($_SESSION['password']) ) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    h1 {
        text-align: center;
        margin-top: 40px;
        color: gray;
    }
    </style>
</head>

<body style="  background: #f5f5f5;">
    <?php
    require "../components/nav.php";
    ?>

    <h1>EMPLOYER PLANS</h1>
    <!--counter box  -->
    <section class="counter-container">
        <div class="counter mt-20">
            <div class="top-circle"></div>
            <div style="display: flex; align-items:center;">
                <h2>1 Year</h2>
            </div>
            <p>$250.00</p>
        </div>
        <div class="counter counter-top">
            <div class="top-circle"></div>
            <div style="display: flex; align-items:center;">
                <h2>Unlimited</h2>
            </div>
            <p>$500.00</p>
        </div>

    </section>


    <?php
    require "../components/footer.php";
    ?>

    <script src="../resources/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
<?php
    }else{
        echo "Not permitted to view this page";
    };
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/style.css'>
    <link rel="stylesheet" href="../css/scroll.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
nav {
    z-index: 999;
}
</style>

<body>

    <!-- NAVIGATION BAR -->

    <?php
        include '../components/nav.php';
    ?>

    <!-- ABOUT US -->
    <section class="about-us">
        <h1 class="header-text hidden-slide">About Job Search</h1>
        <div class="about">
            <div class="about-flex">
                <h1 class="hidden">Our mission is to create more economic freedom in the world</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                </p>
            </div>
            <div class="about-img">
                <img src="../images/pc-mockup.png" class="img-bg hidden-slide" alt="">
            </div>
        </div>
        <div class="about-box">
            <h1 class="hidden-slide">What we’re doing about it</h1>
            <p>
                Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="about">
            <div class="about-img">
                <img src="../images/tab-mockup.png" alt="" class="hidden-slide">
            </div>
            <div class="about-flex">
                <h1 class="hidden">News</h1>
                <p>Stay informed with timely and objective news content relevant to the crypto
                    industry, published daily
                    by Job Search</p>
            </div>
        </div>

    </section>

    <!-- FOOTER -->
    <?php
        include '../components/footer.php';
    ?>

    <script src="../js/scroll.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
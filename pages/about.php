<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../resources/css/style.css'>
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
        <h1 class="header-text hidden-slide" style="text-align: center;">About Calmbird</h1>
        <div class="about">
            <div class="about-flex">
                <h1>Our mission and Vision</h1>
                <p>At Calmbird Services, our mission is to empower the youth through innovative solutions in job
                    advertisement, placement, and cultivating essential 21st-century skills. We strive to go beyond
                    conventional approaches, providing a holistic platform for career development. Our vision is a
                    future where every individual, armed with the right skills and opportunities, can shape their
                    destiny.
                </p>
            </div>
            <div class="about-img">
                <img src="../resources/images/pc-mockup.png" class="img-bg hidden-slide" alt="">
            </div>
        </div>
        <div class="about-box">
            <h1 class="hidden-slide head-text">Our Community </h1>
            <p class="sub-head-text">
                Presently boasting over five thousand members, our community is not just a network; it's a support
                system where empowerment and growth converge. We aim to expand this community to one million by the end
                of 2025.
            </p>
            <img src="../resources/images/mockup-iphone-3.svg" alt="" class="about-mockup">
            <!-- <img src="../resources/images/mockup-iphone-3.svg" alt="" class="about-mockup-two"> -->
        </div>
        <div class="about">
            <div class="about-img">
                <img src="../resources/images/tab-mockup.png" alt="" class="hidden-slide">
            </div>
            <div class="about-flex">
                <h1 class="hidden">Identifying A Gap</h1>
                <p>Recognizing the skills gap among job-seeking youths, even those with higher education, fueled our
                    determination to provide a solution.</p>
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
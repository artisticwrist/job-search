<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <!-- navigation bar -->

    <?php
    require "../components/nav.php";
    ?>


    <!-- Header -->
    <header id="home-header">
        <h1>Explore and discover the right job for you!</h1>
        <?php
        require "../components/search-job-form.php";
        ?>
    </header>

    <!-- find jobs container that direct you to the job list page -->

    <section class="find-job-section">
        <h1 id="find-job-main-header">Find the right job vacancies in Nigeria</h1>
        <h2 class="find-job-sub-header">Experience-based filtering.</h2>
        <p class="find-job-sub-header">Find jobs that suit your experience level</p>
        <div class="search-job">
            <div class="exp-box">
                <h2>No Experience</h2>
                <p>21 Jobs</p>
                <button>Explore Jobs</button>
            </div>
            <div class="exp-box">
                <h2>Entry Level</h2>
                <p>21 Jobs</p>
                <button>Explore Jobs</button>
            </div>
            <div class="exp-box">
                <h2>Internship/ Graduate</h2>
                <p>21 Jobs</p>
                <button>Explore Jobs</button>
            </div>
            <div class="exp-box">
                <h2>Senior Level</h2>
                <p>21 Jobs</p>
                <button>Explore Jobs</button>
            </div>
        </div>
        <button class="explore-btn"><a href="../pages/jobs.php">Explore All Jobs</a></button>
        </div>
    </section>


    <!-- our services offered -->

    <section class="find-job-section">
        <h1 id="find-job-main-header">Why choose us</h1>
        <p class="">Find jobs that suit your experience level</p>
        <div class="services-container">
            <div class="services-box" style="background-image: url(../images/img.jpg);">
                <div class="overlay">
                    <h3>Services</h3>
                </div>
            </div>
            <div class="services-box" style="background-image: url(../images/img.jpg);">
                <div class="overlay">
                    <h3>Services</h3>
                </div>
            </div>
            <div class="services-box" style="background-image: url(../images/img.jpg);">
                <div class="overlay">
                    <h3>Services</h3>
                </div>
            </div>
            <div class="services-box" style="background-image: url(../images/img.jpg);">
                <div class="overlay">
                    <h3>Services</h3>
                </div>
            </div>
            <div class="services-box" style="background-image: url(../images/img.jpg);">
                <div class="overlay">
                    <h3>Services</h3>
                </div>
            </div>
        </div>
    </section>

    <?php
    require "../components/footer.php";
    ?>

    <script src="../js/app.js"></script>
</body>

</html>
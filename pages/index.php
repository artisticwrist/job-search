<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require "../connect/connect.php";
// Get the current page URL
$page_url = $_SERVER['REQUEST_URI'];

// Update the page visit count in the database
$sql = "INSERT INTO page_visits (page_url, visit_count) 
        VALUES ('$page_url', 1) 
        ON DUPLICATE KEY UPDATE visit_count = visit_count + 1";
$con->query($sql);

if(isset($_GET['destroy'])){
    session_start();
    session_unset();
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/scroll.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <!-- navigation bar -->

    <?php
    require "../components/nav.php";
    ?>


    <!-- Header -->
    <header id="home-header">
        <h1 class="header-msg head-text hidden-slide">Find your <span>dream jobs</span></h1>
        <h1 class="head-text hidden-slide">around you today</h1>
        <p class="sub-head-text hidden">When you're searching for a job, there are a few things you can do to
            get the most out
            of your
            search</p>
        <img src="../images/pc-mockup.png" class="mockup hidden" alt="">

    </header>

    <!-- find jobs container that direct you to the job list page -->

    <section class="find-job-section">
        <h1 class="head-text hidden-slide">Find the right job vacancies</h1>
        <p class="sub-head-text hidden">Find jobs that suit your experience level</p>
        <div class="search-job">
            <div class="exp-box hidden-slide">
                <h2>No Experience</h2>
                <p>21 Jobs</p>
                <a>Explore Jobs</a>
            </div>
            <div class="exp-box hidden-slide">
                <h2>Entry Level</h2>
                <p>21 Jobs</p>
                <a>Explore Jobs</a>
            </div>
            <div class="exp-box hidden-slide">
                <h2>Internship/ Graduate</h2>
                <p>21 Jobs</p>
                <a>Explore Jobs</a>
            </div>
            <div class="exp-box hidden-slide">
                <h2>Senior Level</h2>
                <p>21 Jobs</p>
                <a>Explore Jobs</a>
            </div>
        </div>
        <button class="btn btn-primary"><a class="text-white text-decoration-none" href="../pages/jobs.php">Explore All
                Jobs</a></button>
        </div>
    </section>


    <!--school  / avalable courses section -->
    <section class="why-choose-us coloumn-reverse">
        <div class="choose-flex choose-flex-why">
            <h1 class="hidden-slide">Bringing your dream job to life</h1>
            <p style=" color: #40514e70;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet hendrerit turpis, id scelerisque
                erat ullamcorper id. Nullam feugiat lectus eu tellus suscipit, vel dignissim massa bibendum. Cras
                euismod odio a dolor condimentum, at luctus tortor cursus. In hac habitasse platea dictumst.
            </p>
            <button class="home-btn hidden-slide">Get Started</button>

        </div>
        <div class="choose-flex img">
            <img src="../images/tab-mockup.png" alt="" class="image-box-one">
        </div>
    </section>

    <section class="why-choose-us">
        <div class="choose-flex img">
            <img src="../images/left-mockup.png" alt="" class="image-box-two">
        </div>
        <div class="choose-flex choose-flex-why flex">
            <h1 class="hidden-slide">Bringing your dream job to life</h1>
            <p style=" color: #40514e70;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet hendrerit turpis, id scelerisque
                erat ullamcorper id. Nullam feugiat lectus eu tellus suscipit, vel dignissim massa bibendum. Cras
                euismod odio a dolor condimentum, at luctus tortor cursus. In hac habitasse platea dictumst.
            </p>
            <button class="home-btn hidden-slide">Get Started</button>

        </div>
    </section>

    <!--find jobs  -->
    <section class="find-job-section">
        <h1 class="head-text hidden-slide">Jobs of the day</h1>
        <p class="sub-head-text hidden">Search and connect with the right candidates faster. </p>
        <a href="../pages/jobs.php">
            <div class="day-job">

                <div class="day-job-item"><img src="../images/svg/note.svg" alt=""> Content Writer</div>
                <div class="day-job-item"><img src="../images/svg/market.svg" alt=""> Marketing & Sales</div>
                <div class="day-job-item"> <img src="../images/svg/finance.svg" alt="">Finance</div>
                <div class="day-job-item"> <img src="../images/svg/resource.svg" alt=""> Human Resource</div>
                <div class="day-job-item"><img src="../images/svg/customer.svg" alt=""> Customer Service</div>
                <div class="day-job-item"><img src="../images/svg/retail.svg" alt=""> Retail & Products</div>
            </div>
        </a>
    </section>


    <!--counter box  -->
    <section class="counter-container">

        <div class="counter">
            <div class="top-circle"></div>
            <div class="image-box">

            </div>
            <div style="display: flex; align-items:center;">
                <h1 id="counter1"></h1>
                <h1>+</h1>
            </div>

            <p>Job daily</p>
        </div>
        <div class="counter counter-top">
            <div class="top-circle"></div>
            <div class="image-box">

            </div>
            <div style="display: flex; align-items:center;">
                <h1 id="counter2"></h1>
                <h1>k+</h1>
            </div>
            <p>Active users</p>
        </div>
        <div class="counter mt-20">
            <div class="top-circle"></div>
            <div class="image-box">

            </div>
            <div style="display: flex; align-items:center;">
                <h1 id="counter3"></h1>
                <h1>+</h1>
            </div>
            <p>Recruiters</p>
        </div>
        <div class="counter counter-top">
            <div class="top-circle"></div>
            <div class="image-box">

            </div>
            <div style="display: flex; align-items:center;">
                <h1 id="counter4"></h1>
                <h1>k+</h1>
            </div>
            <p>Successful Offers</p>
        </div>

    </section>


    <section class="overview-job-box">
        <h1 class="head-text hidden-slide">Job Search Features</h1>
        <p class="sub-head-text hidden">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet hendrerit
            turpis,
            id scelerisque
            erat ullamcorper id.</p>
        <div class="overview-box">
            <div class="overview-job-flex overview-job-flex-item-left">
                <div class="overview-job-flex-item">
                    <h2 class="hidden-slide">Become and employer</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet hendrerit turpis, id
                        scelerisque
                    </p>
                </div>
                <div class="overview-job-flex-item overview-job-flex-item overview-job-flex-item-right">
                    <h2 class="hidden-slide">Become and employer</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet hendrerit turpis, id
                        scelerisque
                        erat ullamcorper id.
                    </p>
                </div>
            </div>
            <div class="overview-job-flex">
                <img src="../images/front-mockup.png" class="hidden" alt="">
            </div>
            <div class="overview-job-flex text-align-right">
                <div class="overview-job-flex-item">
                    <h2 class="hidden-slide">Become and employer</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet hendrerit turpis, id
                        scelerisque
                        erat ullamcorper id.
                    </p>
                </div>
                <div class="overview-job-flex-item">
                    <h2 class="hidden-slide">Become and employer</h2>
                    <p>
                        Nullam feugiat lectus eu tellus suscipit, vel dignissim massa bibendum.
                        Cras
                        euismod odio a dolor condimentum, at luctus tortor cursus. In hac habitasse platea dictumst.
                    </p>
                </div>
            </div>
        </div>
        <p></p>
    </section>

    <!-- avaialble courses -->

    <section class="find-job-section">
        <h1 class="head-text hidden-slide">Available Courses</h1>
        <p class="sub-head-text hidden">Find jobs that suit your experience level</p>
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


    <!-- why choose us container -->
    <section class="why-choose-us" style="  background: #F5F5F5;">
        <div class="choose-flex choose-flex-why">
            <h4>WHY CHOOSE US</h4>
            <h1>Bringing your dream job to life</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet hendrerit turpis, id scelerisque
                erat ullamcorper id. Nullam feugiat lectus eu tellus suscipit, vel dignissim massa bibendum. Cras
                euismod odio a dolor condimentum, at luctus tortor cursus. In hac habitasse platea dictumst.</p>
        </div>
        <div class="choose-flex reasons">
            <div class="reason-box">
                <img src="" alt="">
                <div class="reason-flex">
                    <h3>Acessibility</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet hendrerit turpis, id
                        scelerisque
                        erat ullamcorper id</p>
                </div>
            </div>

            <div class="reason-box">
                <img src="" alt="">
                <div class="reason-flex">
                    <h3>Acessibility</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet hendrerit turpis, id
                        scelerisque
                        erat ullamcorper id</p>
                </div>
            </div>

            <div class="reason-box">
                <img src="" alt="">
                <div class="reason-flex">
                    <h3>Acessibility</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet hendrerit turpis, id
                        scelerisque
                        erat ullamcorper id</p>
                </div>
            </div>

            <div class="reason-box">
                <img src="" alt="">
                <div class="reason-flex">
                    <h3>Acessibility</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet hendrerit turpis, id
                        scelerisque
                        erat ullamcorper id</p>
                </div>
            </div>

            <div class="reason-box">
                <img src="" alt="">
                <div class="reason-flex">
                    <h3>Acessibility</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet hendrerit turpis, id
                        scelerisque
                        erat ullamcorper id</p>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonials">
        <h1 class="head-text hidden-slide">Testimonies</h1>
        <div class="testimonial-box hidden-slide">
            <img src="../images/img.jpg" alt="">
            <div class="testimonial-flex ">
                <h1>Full Stack Engineering</h1>
                <h2>Joseph George</h2>
                <p>This job hunting website changed my life. With its user-friendly interface and valuable tips, I
                    quickly landed my dream job. It's not just a site; it's a game-changer. Thank you!</p>
            </div>
        </div>

        <div class=" testimonial-box reverse-flex hidden-slide">
            <div class="testimonial-flex">
                <h1>Full Stack Engineering</h1>
                <h2>Joseph George</h2>
                <p>This job hunting website changed my life. With its user-friendly interface and valuable tips, I
                    quickly landed my dream job. It's not just a site; it's a game-changer. Thank you!</p>
            </div>
            <img src="../images/img.jpg" alt="">
        </div>

        <div class="testimonial-box hidden-slide">
            <img src="../images/img.jpg" alt="">
            <div class="testimonial-flex">
                <h1>Full Stack Engineering</h1>
                <h2>Joseph George</h2>
                <p>This job hunting website changed my life. With its user-friendly interface and valuable tips, I
                    quickly landed my dream job. It's not just a site; it's a game-changer. Thank you!</p>
            </div>
        </div>

        <div class="testimonial-box reverse-flex hidden-slide">
            <div class="testimonial-flex">
                <h1>Full Stack Engineering</h1>
                <h2>Joseph George</h2>
                <p>This job hunting website changed my life. With its user-friendly interface and valuable tips, I
                    quickly landed my dream job. It's not just a site; it's a game-changer. Thank you!</p>
            </div>
            <img src="../images/img.jpg" alt="">
        </div>
    </section>




    <section class="sponsor-box">
        <h1 class="head-text hidden-slide">Sponsors</h1>
        <div class="sponsor-flex">
            <img src="../images/logo.jpg" alt="">
            <img src="../images/logo2.jpg" alt="">
            <img src="../images/logo3.jpg" alt="">
            <img src="../images/logo2.jpg" alt="">
            <img src="../images/logo.jpg" alt="">
            <img src="../images/logo.jpg" alt="">
            <img src="../images/logo2.jpg" alt="">
            <img src="../images/logo.jpg" alt="">
            <img src="../images/logo2.jpg" alt="">
            <img src="../images/logo3.jpg" alt="">
        </div>
    </section>

    <div class="get-started">
        <h1>Get Started Today</h1>
        <p>Join thousands of users and find the right job today !</p>
        <button><a href="">Get Started</a></button>

        <img src="../images/mockup.png" class="hidden-slide" alt="">
    </div>




    <?php
    require "../components/footer.php";
    ?>

    <script src="../js/app.js"></script>
    <script src="../js/count.js"></script>
    <script src="../js/scroll.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Counter</title>
</head>
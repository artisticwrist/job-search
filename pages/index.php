<?php
//error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

require "../config/connect/connect.php";
// Get the current page URL
// $page_url = $_SERVER['REQUEST_URI'];

// Update the page visit count in the database
// $sql = "INSERT INTO page_visits (page_url, visit_count) 
//         VALUES ('$page_url', 1) 
//         ON DUPLICATE KEY UPDATE visit_count = visit_count + 1";
// mysqli_query($con,$sql);


//Logs out user
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
    <link rel="stylesheet" href="../resources/css/style.css">
    <link rel="stylesheet" href="../resources/css/scroll.css">
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
        <div class="sub-head-div">
            <p class="hidden">
                When you're searching for a job, there are a few things you can do to get the most out of your search
            </p>
        </div>
        <img src="../resources/images/mockup-iphone-3.svg" alt="" class="bg-mockup">

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
                <h2>Internship</h2>
                <p>21 Jobs</p>
                <a>Explore Jobs</a>
            </div>
            <div class="exp-box hidden-slide">
                <h2>Senior Level</h2>
                <p>21 Jobs</p>
                <a>Explore Jobs</a>
            </div>
        </div>
        <button class="home-btn"><a class="text-white text-decoration-none" href="../pages/jobs.php">Explore All
                Jobs</a></button>
        </div>
    </section>

    <!--more contents... -->
    <section class="why-choose-us coloumn-reverse margin">
        <div class="choose-flex choose-flex-why ">
            <h1 class="hidden-slide">Innovative Solution</h1>
            <p style=" color: #40514e70;">
                To address the skills gap, we created a dedicated website, serving as an educational hub, empowering
                members with practical skills to excel in the competitive job market.

            </p>
            <button class="home-btn hidden-slide"><a href="./jobs.php" class="text-white text-decoration-none">Get
                    Started</a></button>

        </div>
        <div class="choose-flex img">
            <img src="../resources/images/tab-mockup.png" alt="" class="image-box-one">
        </div>
    </section>

    <!-- more contents..... -->
    <section class="why-choose-us">
        <div class="choose-flex img">
            <img src="../resources/images/left-mockup.png" alt="" class="image-box-two">
        </div>
        <div class="choose-flex choose-flex-why flex margin-right">
            <h1 class="hidden-slide">Journey of Growth</h1>
            <p style=" color: #40514e70;">
                Since our inception, we've evolved from a social media-focused job platform to an organization
                successfully linking thousands of youths to their dream jobs. Our growth is a testament to our
                commitment to making a tangible impact on youth unemployment.
            </p>
            <button class="home-btn hidden-slide"><a href="./jobs.php" class="text-white text-decoration-none">Get
                    Started</a></button>
        </div>
    </section>

    <!--find jobs  -->
    <section class="find-job-section">
        <h1 class="head-text hidden-slide">Jobs of the day</h1>
        <p class="sub-head-text hidden">Search and connect with the right candidates faster. </p>
        <a href="../pages/jobs.php">
            <div class="day-job">

                <div class="day-job-item"><img src="../resources/images/svg/note.svg" alt=""> Content Writer</div>
                <div class="day-job-item"><img src="../resources/images/svg/market.svg" alt=""> Marketing & Sales</div>
                <div class="day-job-item"> <img src="../resources/images/svg/finance.svg" alt="">Finance</div>
                <div class="day-job-item"> <img src="../images/svg/resource.svg" alt=""> Human Resource</div>
                <div class="day-job-item"><img src="../resources/images/svg/customer.svg" alt=""> Customer Service</div>
                <div class="day-job-item"><img src="../resources/images/svg/retail.svg" alt=""> Retail & Products</div>
            </div>
        </a>
    </section>

    <!--counter box  -->
    <section class="counter-container">

        <div class="counter">
            <div class="top-circle"></div>
            <div class="image-box">
                <img src="../resources/images/svg/edit-fill-dark.svg" alt="">
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
                <img src="../resources/images/svg/home.svg" alt="">
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
                <img src="../resources/images/svg/accounts-dark.svg" alt="">
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
                <img src="../resources/images/svg/success-dark.svg" alt="">
            </div>
            <div style="display: flex; align-items:center;">
                <h1 id="counter4"></h1>
                <h1>k+</h1>
            </div>
            <p>Successful Offers</p>
        </div>

    </section>

    <!-- more contents -->
    <section class="overview-job-box">
        <h1 class="head-text hidden-slide">Calmbird Services</h1>
        <p class="sub-head-text hidden">Your Empowerment Hub</p>
        <div class="overview-box">
            <div class="overview-job-flex overview-job-flex-item-left">
                <div class="overview-job-flex-item">
                    <h2 class="hidden-slide">Job Advert</h2>
                    <p>
                        Unlocking Career Opportunities
                        Strategic job postings across social media platforms provide unparalleled access to
                        opportunities aligning with your aspirations.
                    </p>
                </div>
                <div class="overview-job-flex-item overview-job-flex-item overview-job-flex-item-right">
                    <h2 class="hidden-slide"> Skill Acquisition</h2>
                    <p>
                        Tailoring Your Skill Set for Success
                        Collaboration with tech experts ensures targeted training, equipping you not just to compete but
                        thrive in your pursuit of the ideal job.
                    </p>
                </div>
            </div>
            <div class="overview-job-flex">
                <img src="../resources/images/front-mockup.png" class="hidden" alt="">
            </div>
            <div class="overview-job-flex text-align-right">
                <div class="overview-job-flex-item">
                    <h2 class="hidden-slide">Job Placement</h2>
                    <p>
                        Connecting You to Your Next Career Move
                        We embark on the journey of finding the right job with you, prioritizing connections with
                        opportunities aligning with your career goals.

                    </p>
                </div>
                <div class="overview-job-flex-item">
                    <h2 class="hidden-slide">Business Consultancy</h2>
                    <p>
                        Buiding Your Business Growth
                        Beyond advice, our consultancy services offer expertise, connecting you with experts fostering
                        the growth of your business.
                    </p>
                </div>
            </div>
        </div>
        <p></p>
    </section>

    <!-- available courses -->

    <section class="find-job-section">
        <h1 class="head-text hidden-slide">Available Courses</h1>
        <p class="sub-head-text hidden">Find jobs that suit your experience level</p>
        <div class="services-container">
            <div class="services-box" style="background-image: url(../resources/images/img.jpg);">
                <div class="overlay">
                    <h3>Services</h3>
                </div>
            </div>
            <div class="services-box" style="background-image: url(../resources/images/img.jpg);">
                <div class="overlay">
                    <h3>Services</h3>
                </div>
            </div>
            <div class="services-box" style="background-image: url(../resources/images/img.jpg);">
                <div class="overlay">
                    <h3>Services</h3>
                </div>
            </div>
            <div class="services-box" style="background-image: url(../resources/images/img.jpg);">
                <div class="overlay">
                    <h3>Services</h3>
                </div>
            </div>
            <div class="services-box" style="background-image: url(../resources/images/img.jpg);">
                <div class="overlay">
                    <h3>Services</h3>
                </div>
            </div>
            <div class="services-box" style="background-image: url(../resources/images/img.jpg);">
                <div class="overlay">
                    <h3>Services</h3>
                </div>
            </div>
            <div class="services-box" style="background-image: url(../resources/images/img.jpg);">
                <div class="overlay">
                    <h3>Services</h3>
                </div>
            </div>

        </div>
    </section>

    <!-- why choose us container -->
    <section class="why-choose-us" style="  background: #F5F5F5;">
        <div class="choose-flex choose-flex-why padding-x">
            <h4>Why Choose Us?</h4>
            <h1>Why Choose Calmbird Services?</h1>
        </div>
        <div class="choose-flex reasons">
            <div class="reason-box">
                <img src="" alt="">
                <div class="reason-flex">
                    <h3><img src="../resources/images/svg/check.svg" alt=""> Holistic Empowerment</h3>
                    <p>Beyond conventional services, focusing on your complete empowerment
                        journey.</p>
                </div>
            </div>

            <div class="reason-box">
                <img src="" alt="">
                <div class="reason-flex">
                    <h3><img src="../resources/images/svg/check.svg" alt=""> Targeted Skill Development</h3>
                    <p>Emphasis on skill acquisition ensures you're industry-ready.</p>
                </div>
            </div>

            <div class="reason-box">
                <img src="" alt="">
                <div class="reason-flex">
                    <h3><img src="../resources/images/svg/check.svg" alt=""> Tailored Job Placement</h3>
                    <p>Prioritizing connections aligning with your aspirations.</p>
                </div>
            </div>

            <div class="reason-box">
                <img src="" alt="">
                <div class="reason-flex">
                    <h3> <img src="../resources/images/svg/check.svg" alt=""> Expert Business Guidance</h3>
                    <p>Consultancy services designed to guide and support your business
                        endeavors.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- testimonials from users (not dynamic) -->
    <section class="testimonials">
        <h1 class="head-text hidden-slide">Testimonies</h1>
        <div class="testimonial-box hidden-slide">
            <img src="../resources/images/img.jpg" alt="">
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
            <img src="../resources/images/img.jpg" alt="">
        </div>

        <div class="testimonial-box hidden-slide">
            <img src="../resources/images/img.jpg" alt="">
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
            <img src="../resources/images/img.jpg" alt="">
        </div>
    </section>

    <!-- sponsors logos -->
    <section class="sponsor-box">
        <h1 class="head-text hidden-slide">Sponsors</h1>
        <div class="sponsor-flex">
            <img src="../resources/images/logo.jpg" alt="">
            <img src="../resources/images/logo2.jpg" alt="">
            <img src="../resources/images/logo3.jpg" alt="">
            <img src="../resources/images/logo2.jpg" alt="">
            <img src="../resources/images/logo.jpg" alt="">
            <img src="../resources/images/logo.jpg" alt="">
            <img src="../resources/images/logo2.jpg" alt="">
            <img src="../resources/images/logo.jpg" alt="">
            <img src="../resources/images/logo2.jpg" alt="">
            <img src="../resources/images/logo3.jpg" alt="">
        </div>
    </section>

    <div class="get-started-parent">
        <!-- more conetnts -->
        <div class="get-started">
            <h1>Get Started Today</h1>
            <p>Calmbird Services is not just a service provider; we are your partners in success. Join us on this
                journey of empowerment, where the right skills and opportunities transform lives and contribute to the
                growth of small and medium-scale businesses.</p>
            <button><a href="">Get Started</a></button>

            <img src="../resources/images/mockup.png" class="hidden-slide" alt="">
        </div>
    </div>


    <!-- footer -->
    <?php
    require "../components/footer.php";
    ?>



    <script src="../resources/js/app.js"></script>
    <script src="../resources/js/count.js"></script>
    <script src="../resources/js/scroll.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
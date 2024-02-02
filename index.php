<?php
//error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

require "./config/connect/connect.php";
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
    <link rel="stylesheet" href="./resources/css/scroll.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/style.css">
</head>

<body>

    <!-- navigation bar -->
    <?php

    $active = null;
    $subcriber = null;
    $employer = null;

    if(isset($_SESSION['email']) && isset($_SESSION['password'])){
        $active = true;
    }

    if(isset($_SESSION['subscribe_status'])){
        
        if($_SESSION['subscribe_status'] == 1){
            $subcriber = true;
        } 
         
    }
     

    if(isset($_SESSION['employer_status'])){
        
        if($_SESSION['employer_status'] == 1){
            $employer = true;
        }
        
    }


?>
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand logo" href="./">
            <img src="./resources/images/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Careers
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./pages/all-blogs.php">Career Development</a></li>
                        <li><a class="dropdown-item" href="./pages/career.php">Latest Blogs</a></li>
                    </ul>
                </li> 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        About Us
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./pages/about.php">About Us</a></li>
                        <li><a class="dropdown-item" href="#">Our Goal</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="./pages/contact.php">
                        Contact Us
                    </a>
                </li>
            </ul>
            <?php
            if($active == null){
            ?>


            <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">
                <li class="nav-item me-lg-2">
                    <a href="./pages/signup.php" class="nav-link"><b>Post a Job</b></a>
                </li>
                    
                <li class="nav-item">
                    <button class="btn-primary btn">
                        <a class="text-light text-decoration-none" href="./pages/signup.php">Get Started</a>
                    </button>
                </li>

            </ul>


            <?php           
             }elseif($active == true){

            ?>

            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <?php   echo $_SESSION['full_name'];   ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./pages/edit-profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="./pages/subscription.php">Subscribe</a></li>
                        <li><a class="dropdown-item" href="./pages/upload-slip.php">Upload Payment</a></li>
                        <li><a class="dropdown-item" href="./pages/employer-subscription.php">Become an Employer</a>
                        </li>
                        <li><a class="dropdown-item" href="./components/view-refferred-users.php">Referred Users</li>
                        </p>
                        <li><a class="dropdown-item" href="./logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>

            <?php
                }
            ?>



        </div>
    </div>
</nav>

    <!-- Header -->
    <header id="home-header">
        <div class="typewriter">
            <h1 class="header-msg head-text hidden-slide">Find your <span>dream jobs</span></h1>
        </div>
        <h1 class="head-text hidden-slide">around you today</h1>
        <div class="sub-head-div col-lg-4 col-12">
            <a class="btn btn-primary text-white text-decoration-none" href="./pages/about.php"><b>About Us</b></a>
            <a  class="btn find_job btn-primary bg-white text-primary text-decoration-none" href="./pages/jobs.php">Find Jobs</a>
        </div>
        <!--<img src="./resources/images/mockup-iphone-3.svg" alt="" class="bg-mockup">-->

    </header>


    <!-- find jobs container that direct you to the job list page -->
    <!-- background: rgba(47, 136, 252, 0.123); -->
    <section class="find-job-section">
        <h1 class="head-text hidden-slide">Find the right job vacancies</h1>
        <p class="sub-head-text hidden">Find jobs that suit your experience level</p>
        <div class="search-job container">
            <div class="row col-12 justify-content-between">
                <div class="col-lg-3 col-md-6">
                <div class="exp-box hidden-slide">
                    <h2>No Experience</h2>
                    <p>21 Jobs</p>
                </div>
                </div>
                <div class="col-lg-3 col-md-6">
                <div class="exp-box hidden-slide">
                    <h2>Entry Level</h2>
                    <p>21 Jobs</p>
                </div>
                </div>
                <div class="col-lg-3 col-md-6">
                <div class="exp-box hidden-slide">
                    <h2>Internship</h2>
                    <p>21 Jobs</p>
                </div>
                </div>
                <div class="col-lg-3 col-md-6">         
                <div class="exp-box hidden-slide">
                    <h2>Senior Level</h2>
                    <p>21 Jobs</p>
                </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary"><a class="text-white text-decoration-none" href="../pages/jobs.php"><b>Explore All
                Jobs</b></a></button>
        </div>
    </section>

    <!--more contents... -->
    <section class="why-choose-us coloumn-reverse margin">
        <div class="choose-flex choose-flex-why ">
            <h1 class="hidden-slide">Innovative Solution</h1>
            <p style=" color: #919191;">
                To address the skills gap, we created a dedicated website, serving as an educational hub, empowering
                members with practical skills to excel in the competitive job market.

            </p>
            <div class="col-lg-6">
                <button class="btn btn-primary"><a href="./jobs.php" class="text-white text-decoration-none"><b>Get
                    Started</b></a>
                </button>
            </div>

        </div>
        <div class="choose-flex img">
            <img src="./resources/images/tab-mockup.png" alt="" class="image-box-one">
        </div>
    </section>

    <!-- more contents..... -->
    <section class="why-choose-us" style="background:#f1f1f1;">
        <div class="choose-flex img">
            <img src="./resources/images/left-mockup.png" alt="" class="image-box-two">
        </div>
        <div class="choose-flex choose-flex-why flex margin-right">
            <h1 class="hidden-slide">Journey of Growth</h1>
            <p style=" color: #919191;">
                Since our inception, we've evolved from a social media-focused job platform to an organization
                successfully linking thousands of youths to their dream jobs. Our growth is a testament to our
                commitment to making a tangible impact on youth unemployment.
            </p>
            <button class="btn btn-primary"><a href="./jobs.php" class="text-white text-decoration-none"><b>Get
                    Started</b></a></button>
        </div>
    </section>

    <!--find jobs  -->
    <section class="find-job-section bg-white">
        <h1 class="head-text hidden-slide">Jobs of the day</h1>
        <p class="sub-head-text hidden">Search and connect with the right candidates faster. </p>
        <a class="col-12" href="./pages/jobs.php">
            <div class="day-job">

                <div class="day-job-item"><img src="./resources/images/svg/note.svg" alt=""> Content Writer</div>
                <div class="day-job-item"><img src="./resources/images/svg/market.svg" alt=""> Marketing & Sales</div>
                <div class="day-job-item"> <img src="./resources/images/svg/finance.svg" alt="">Finance</div>
                <div class="day-job-item"> <img src="./resources/images/svg/resource.svg" alt=""> Human Resource</div>
                <div class="day-job-item"><img src="./resources/images/svg/customer.svg" alt=""> Customer Service</div>
                <div class="day-job-item"><img src="./resources/images/svg/retail.svg" alt=""> Retail & Products</div>
            </div>
        </a>
    </section>

    <!--counter box  -->
    <section class="counter-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <div class="counter">
                        <div class="col-3">
                            <div class="image-box">
                                <img src="./resources/images/svg/edit-fill-dark.svg" alt="">
                            </div>
                        </div>
                        <div class="col">
                            <div style="display: flex; align-items:center;">
                                <h1 id="counter1"></h1>
                                <h1>+</h1>
                            </div>
                            
                            <p>Job daily</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="counter counter-top">
                        <div class="col-3">
                            <div class="image-box">
                                <img src="./resources/images/svg/home.svg" alt="">
                            </div>
                        </div>
                        <div class="col">
                            <div style="display: flex; align-items:center;">
                                <h1 id="counter2"></h1>
                                <h1>k+</h1>
                            </div>
                            <p>Active users</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="counter mt-20">
                        <div class="col-3">
                            <div class="image-box">
                                <img src="./resources/images/svg/accounts-dark.svg" alt="">
                            </div>
                        </div>
                        <div class="col">
                            <div style="display: flex; align-items:center;">
                                <h1 id="counter3"></h1>
                                <h1>+</h1>
                            </div>
                            <p>Recruiters</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="counter counter-top">
                        <div class="col-3">
                            <div class="image-box">
                                <img src="./resources/images/svg/success-dark.svg" alt="">
                            </div>
                        </div>
                        <div class="col">
                            <div style="display: flex; align-items:center;">
                                <h1 id="counter4"></h1>
                                <h1>k+</h1>
                            </div>
                            <p>Successful Offers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        
        
        

    </section>

    <!-- more contents -->
    <section class="overview-job-box">
        <!-- <h1 class="head-text hidden-slide">Calmbird Services</h1> -->
        <p class="sub-head-text hidden">Your Empowerment Hub For...</p>
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
            <div class="overview-job-flex d-none d-md-flex">
                <img src="./resources/images/front-mockup.png" class="hidden" alt="">
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

    <section class="find-job-section available_services">
        <h1 class="head-text hidden-slide">Available Courses</h1>
        <p class="sub-head-text hidden">Find jobs that suit your experience level</p>
        <div class="responsive">
            <div class="item">
                <div class="services_box">
                    <h3>Services One</h3>
                </div>
            </div>
            <div class="item">
                <div class="services_box">
                    <h3>Services Two</h3>
                </div>
            </div>
            <div class="item">
                <div class="services_box">
                    <h3>Services Three</h3>
                </div>
            </div>
            <div class="item">
                <div class="services_box">
                    <h3>Services Four</h3>
                </div>
            </div>
            <div class="item">
                <div class="services_box">
                    <h3>Services Five</h3>
                </div>
            </div>
            <div class="item">
                <div class="services_box">
                    <h3>Services Six</h3>
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
                <img src="./resources/images/svg/check.svg" alt="">
                <div class="reason-flex">
                    <h3> Holistic Empowerment</h3>
                    <p>Beyond conventional services, focusing on your complete empowerment
                        journey.</p>
                </div>
            </div>

            <div class="reason-box">
                <img src="./resources/images/svg/check.svg" alt=""> 
                <div class="reason-flex">
                    <h3>Targeted Skill Development</h3>
                    <p>Emphasis on skill acquisition ensures you're industry-ready.</p>
                </div>
            </div>

            <div class="reason-box">
                <img src="./resources/images/svg/check.svg" alt=""> 
                <div class="reason-flex">
                    <h3>Tailored Job Placement</h3>
                    <p>Prioritizing connections aligning with your aspirations.</p>
                </div>
            </div>

            <div class="reason-box">
                <img src="./resources/images/svg/check.svg" alt="">
                <div class="reason-flex">
                    <h3> Expert Business Guidance</h3>
                    <p>Consultancy services designed to guide and support your business
                        endeavors.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- testimonials from users (not dynamic) -->
    <section class="testimonials">
        <h1 class="head-text hidden-slide">Testimonials</h1>
        <div class="testimonial-box hidden-slide">
            <img src="./resources/images/img.jpg" alt="">
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
            <img src="./resources/images/img.jpg" alt="">
        </div>

        <div class="testimonial-box hidden-slide">
            <img src="./resources/images/img.jpg" alt="">
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
            <img src="./resources/images/img.jpg" alt="">
        </div>
    </section>

    <!-- sponsors logos -->
    <section class="sponsor-box">
        <h1 class="head-text hidden-slide">Sponsors</h1>
        <div class="sponsor-flex">
            <img src="./resources/images/logo.jpg" alt="">
            <img src="./resources/images/logo2.jpg" alt="">
            <img src="./resources/images/logo3.jpg" alt="">
            <img src="./resources/images/logo2.jpg" alt="">
            <img src="./resources/images/logo.jpg" alt="">
            <img src="./resources/images/logo.jpg" alt="">
            <img src="./resources/images/logo2.jpg" alt="">
            <img src="./resources/images/logo.jpg" alt="">
            <img src="./resources/images/logo2.jpg" alt="">
            <img src="./resources/images/logo3.jpg" alt="">
        </div>
    </section>

    <div class="get-started-parent">
        <!-- more conetnts -->
        <div class="get-started">
            <h1>Get Started Today</h1>
            <p>Calmbird Services is not just a service provider; we are your partners in success. Join us on this
                journey of empowerment, where the right skills and opportunities transform lives and contribute to the
                growth of small and medium-scale businesses.</p>
            <button><a href="">Join Us</a></button>

            <img src="./resources/images/mockup.png" class="hidden-slide" alt="">
        </div>
    </div>


    <!-- footer -->
    <footer>
        <div class="row justify-content-between">
            <div class="col-md-4">
                <div class="footer-logo-socials">
                    <img src="./resources/images/logo-white.png" class="footer-logo" alt="">
                    <div class="footer-socials">
                        <img src="../resources/images/svg/instagram.svg" alt="">
                        <img src="../resources/images/svg/twitter.svg" alt="">
                        <img src="../resources/images/svg/facebook.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row justify-content-between">
                    <div class="col-md-4">
                        <div class="footer-nav">
                            <p><b>Careers</b></p>
                            <p><a href="../pages/career.php">Career Blogs</a> </p>
                            <p><a href="../pages/all-blogs.php">Blogs</a></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-nav footer-nav-second">
                            <p><b>About Us</b></p>
                            <p><a href="../pages/about.php">Our Goals</a></p>
                            <p><a href="../pages/about.php#faq">FAQs</a></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-nav">
                            <p><b>Join Us</b></p>
                            <p><a href="../pages/signup.php">Sign Up</a></p>
                            <p><a href="../pages/login.php">Log In</a></p>
                        </div>
                    </div>
                </div>
                <!-- <div class="footer-navigation">
                </div> -->
            </div>
        </div>
        <hr>
        <div class="footer-flex">
            <div class="footer-terms">
                <p>Terms of services</p>
                <p>Policy Services</p>
                <p>Cookie Policy</p>
            </div>
            <p class="text-center"><b>&copy2024 CALMBIRD SERVICES. </b><br>All right reserved.</p>
        </div>

    </footer>


    <script src="./resources/js/app.js"></script>
    <script src="./resources/js/count.js"></script>
    <script src="./resources/js/scroll.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
        $('.responsive').slick({
            dots: false,
            infinite: true,
            autoplay:true,
            speed: 1000,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
            ]
            });

            $('.sponsor-flex').slick({
            dots: false,
            infinite: true,
            autoplay:true,
            speed: 1000,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
            ]
            });
	
    </script>
</body>
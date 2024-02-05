<?php
    require "../config/connect/connect.php";

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
        <a class="navbar-brand logo" href="../">
            <img src="../resources/images/logo.png" alt="">
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
                        <li><a class="dropdown-item" href="../pages/all-blogs.php">Career Development</a></li>
                        <li><a class="dropdown-item" href="../pages/career.php">Latest Blogs</a></li>
                    </ul>
                </li> 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        About Us
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/about.php">About Us</a></li>
                        <li><a class="dropdown-item" href="#">Our Goal</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../pages/contact.php">
                        Contact Us
                    </a>
                </li>
            </ul>
            <?php
            if($active == null){
            ?>


            <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">
                <li class="nav-item me-lg-2">
                    <a href="../pages/signup.php" class="nav-link"><b>Post a Job</b></a>
                </li>
                    
                <li class="nav-item">
                    <button class="btn-primary btn">
                        <a class="text-light text-decoration-none" href="../pages/signup.php">Get Started</a>
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
                        <li><a class="dropdown-item" href="../pages/edit-profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="../pages/subscription.php">Subscribe</a></li>
                        <li><a class="dropdown-item" href="../pages/upload-slip.php">Upload Payment</a></li>
                        <li><a class="dropdown-item" href="../pages/employer-subscription.php">Become an Employer</a>
                        </li>
                        <li><a class="dropdown-item" href="../components/view-refferred-users.php">Referred Users</li>
                        </p>
                        <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>

            <?php
                }
            ?>



        </div>
    </div>
</nav>
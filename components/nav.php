<?php
    require "../connect/connect.php";
    session_start();

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
        <a class="navbar-brand logo" href="../pages/index.php">Job Search</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Careers
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">CV Review servcies</a></li>
                        <li><a class="dropdown-item" href="#">Job vacanies</a></li>
                        <li><a class="dropdown-item" href="#">Soft skill training</a></li>
                        <li><a class="dropdown-item" href="#">Job search advice</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Job search advice</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Education
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Courses</a></li>
                        <li><a class="dropdown-item" href="#">About Courses</a></li>
                        <li><a class="dropdown-item" href="#">Soft skill training</a></li>
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Contact Us
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/contact.php">Send us a message</a></li>
                    </ul>
                </li>
            </ul>
            <?php
            if($active == null){
            ?>


            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="../pages/signup.php">Sign Up</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../pages/login.php">Log In</a>
                </li>
                <button class="nav-item btn-primary btn">
                    <a href="../pages/signup.php" class="text-light text-decoration-none">Become an Employer</a>
                </button>
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
                        <li><a class="dropdown-item" href="../pages/upload-slip.php">Upload Payment</a></li>
                        <li><a class="dropdown-item" href="../config/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>

            <?php
                }
            ?>



        </div>
    </div>
</nav>
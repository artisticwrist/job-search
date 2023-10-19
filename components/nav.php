    <?php
    
    require "../connect/connect.php";
    session_start();
    ?>
    <!-- navigaton bar sticked to the top of page-->
    <nav>
        <h1 class="logo">
            <a href="../pages/index.php">Job-Search</a>
        </h1>
        <ul class="nav-list-one nav-list">
            <li class="list-hover">
                <div onmouseover="showNavOption()" onmouseleave="hideNavOption()" id="hover-self">Job seekers
                    <div class="hover-elem  display-none" id="hover-option-one">
                        <p>CV Review servcies</p>
                        <p>Job vacanies</p>
                        <p>Soft skill training</p>
                        <p>Job search advice</p>
                    </div>
                </div>
            </li>
            <li>
                <div onmouseover="showNavSecondOption()" onmouseleave="hideNavSecondOption()">Employers
                    <div class="hover-elem display-none" id="hover-option-two">
                        <p>CV Review servcies</p>
                        <p>Job vacanies</p>
                        <p>Soft skill training</p>
                        <p>Job search advice</p>
                    </div>
                </div>
            </li>
            <li>
                <div onmouseover="showNavThirdOption()" onmouseleave="hideNavThirdOption()">Careers
                    <div class="hover-elem display-none" id="hover-option-three">
                        <p>CV Review servcies</p>
                        <p>Job vacanies</p>
                        <p>Soft skill training</p>
                        <p>Job search advice</p>
                    </div>
                </div>
            </li>
            <li>
                <div onmouseover="showNavFourthOption()" onmouseleave="hideNavFourthOption()">Help center
                    <div class="hover-elem display-none" id="hover-option-four">
                        <p>CV Review servcies</p>
                        <p>Job vacanies</p>
                        <p>Soft skill training</p>
                        <p>Job search advice</p>
                    </div>
                </div>
            </li>
        </ul>



        <?php

        if (isset($_SESSION['email']) && isset($_SESSION['password']) ) {
        
        ?>
        <ul class="nav-list-three">
            <li>
                <div onmouseover="showNavOptionUser()" onmouseleave="hideNavOptionUser()" class="user-option"
                    id="hover-self">
                    <div style="display: flex; align-items: center;">
                        <img src="../images/img.jpg" alt="" class="pfp" style="margin: 0px 10px;">
                        <?php echo $_SESSION['email']; ?>
                    </div>


                    <div class="hover-elem  display-none" id="hover-option-user">
                        <p><a href="../config/logout.php">Logout</a></p>
                        <?php
                        if($_SESSION['employer_status'] === 0){
                            ?>
                        <p><a href="../config/logout.php">Become an employer</a></p>
                        <?php
                            }
                        ?>

                    </div>
                </div>
            </li>
        </ul>
        <?php
        }else{
            ?>
        <ul class="nav-list-two nav-list">
            <li><a href="../pages/signup.php">Sign up</a></li>
            <li><a href="../pages/login.php">Log in</a></li>
            <li class="create-job-btn"><a href="../pages/signup.php">Create a Job</a></li>
        </ul>
        <?php
        };
        ?>

        <!-- ham-burger -->
        <div class="ham-burger" id="ham-burger" onclick="showBurgerNav()">
            <div class="burger"></div>
            <div class="burger"></div>
            <div class="burger"></div>
        </div>
    </nav>

    <script src="../js/app.js"></script>
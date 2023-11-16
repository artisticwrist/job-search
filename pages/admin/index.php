    <section class="admin-section">
        <div class="admin-nav">
            <h3>Job-search</h3>
            <ul>
                <li onclick="showAllUsersAdmin()">All users</li>
                <li onclick="showAllRequestAdmin()">Subscribe request</li>
                <li onclick="showAllFeedbackAdmin()">Feedbacks</li>
                <li><a href="../pages/create-jobs-form.php">Create a Job</a></li>
                <li><a href="../pages/create-admin.php">Create New Admin</a></li>
            </ul>


            <button class="create-job-btn"><a href="../config/logout.php">logout</a></button>
        </div>

        <div class="admin-nav admin-nav-mobile">
            <h1>Job-search</h1>
            <ul>
                <li onclick="showAllUsersAdmin()">All users</li>
                <li onclick="showAllRequestAdmin()">Subscribe request</li>
                <li onclick="showAllFeedbackAdmin()">Feedbacks</li>
                <li><a href="../pages/create-jobs-form.php">Create a Job</a></li>
            </ul>


            <button class="create-job-btn"><a href="../config/logout.php">logout</a></button>
        </div>
        <div class="admin-body">


            <h1>Welcome Admin <span style="  color: #30e3ca;">Username</span></h1>

            <div style="display:flex; justify-content:space-between; align-items:center;margin-top: 30px;">
                <h1>Overview</h1>
                <!-- ham-burger -->
                <div class="ham-burger burger-admin" style="margin-right:30px;" onclick="showAdminNav()">
                    <div class="burger"></div>
                    <div class="burger"></div>
                    <div class="burger"></div>
                </div>
            </div>

            <div class="overview display-non" onclick="closeAdminNav()">
                <div class="overview-flex first-child">
                    <p>
                        <b>
                            <?php
                                // SQL query to count the number of rows in the table
                                $query = "SELECT COUNT(*) as row_count FROM users";

                                // Execute the query
                                $result = mysqli_query($con, $query);

                                // Check if the query was successful
                                if ($result) {
                                    // Fetch the row count from the result
                                    $row = mysqli_fetch_assoc($result);
                                    $rowCount = $row['row_count'];

                                    // Output the number of rows
                                    echo $rowCount;

                                    // Close the result set
                                    mysqli_free_result($result);
                                } else {
                                    // Handle the query error if necessary
                                    echo "Error: " . mysqli_error($conn);
                                }
                            ?>
                        </b>
                    </p>
                    <p>Total Users</p>
                </div>
                <div class="overview-flex">
                    <p>
                        <b>
                            <?php
                                // SQL query to count the number of rows in the table
                                $query = "SELECT COUNT(*) as row_count FROM sub_request";

                                // Execute the query
                                $result = mysqli_query($con, $query);

                                // Check if the query was successful
                                if ($result) {
                                    // Fetch the row count from the result
                                    $row = mysqli_fetch_assoc($result);
                                    $rowCount = $row['row_count'];

                                    // Output the number of rows
                                    echo $rowCount;

                                    // Close the result set
                                    mysqli_free_result($result);
                                } else {
                                    // Handle the query error if necessary
                                    echo "Error: " . mysqli_error($conn);
                                }
                            ?>
                        </b>
                    </p>
                    <p>Payment Verification</p>
                </div>
                <div class="overview-flex">
                    <p>
                        <b>
                            <?php
                                // SQL query to count the number of rows in the table
                                $query = "SELECT COUNT(*) as row_count FROM jobs";

                                // Execute the query
                                $result = mysqli_query($con, $query);

                                // Check if the query was successful
                                if ($result) {
                                    // Fetch the row count from the result
                                    $row = mysqli_fetch_assoc($result);
                                    $rowCount = $row['row_count'];

                                    // Output the number of rows
                                    echo $rowCount;

                                    // Close the result set
                                    mysqli_free_result($result);
                                } else {
                                    // Handle the query error if necessary
                                    echo "Error: " . mysqli_error($conn);
                                }
                            ?>
                        </b>
                    </p>
                    <p>Job Openings </p>
                </div>
                <div class="overview-flex">
                    <p>
                        <b>
                            <?php
                                // SQL query to count the number of rows in the table
                                $query = "SELECT COUNT(*) as row_count FROM feedback";

                                // Execute the query
                                $result = mysqli_query($con, $query);

                                // Check if the query was successful
                                if ($result) {
                                    // Fetch the row count from the result
                                    $row = mysqli_fetch_assoc($result);
                                    $rowCount = $row['row_count'];

                                    // Output the number of rows
                                    echo $rowCount;

                                    // Close the result set
                                    mysqli_free_result($result);
                                } else {
                                    // Handle the query error if necessary
                                    echo "Error: " . mysqli_error($conn);
                                }
                            ?>
                        </b>
                    </p>
                    <p>Feedback Messages</p>
                </div>
            </div>

            <section class="admin-all-users-active display-non" id="all-users-admin" onclick="closeAdminNav()">
                <div style="display: flex; align-items:center; margin:10px 0px;">
                    <h1>Job-search users</h1>
                    <p style="font-size: 13px; margin:10px 0px; color:silver;">1200 active users</p>
                </div>


                <!-- all user list -->
                <section class="list-users-dashbooard">
                    <div class="list-dashboard-head">
                        <div class="dashboard-head s-n">
                            <h3>S/N</h3>
                        </div>
                        <div class="dashboard-head">
                            <h3>Name</h3>
                        </div>
                        <div class="dashboard-head">
                            <h3>Status</h3>
                        </div>
                        <div class="dashboard-head">
                            <h3>Subcribtion</h3>
                        </div>
                        <div class="dashboard-head">
                            <h3>Actions</h3>
                        </div>
                    </div>

                    <?php
                require '../components/all-users-admin.php';
                ?>

                </section>

            </section>

            <!--  subrcibe request container-->
            <section class="admin-sub-request-active display-none" id="all-request-admin" onclick="closeAdminNav()">
                <div style="display: flex; align-items:center; margin:10px 0px;">
                    <h1>Subscribe request</h1>
                    <p style="font-size: 13px; margin:10px 0px; color:silver;">10 request</p>
                </div>

                <section class="list-users-dashbooard ">
                    <div class="list-dashboard-head">
                        <div class="dashboard-head">
                            <h3>email</h3>
                        </div>
                        <div class="dashboard-head">
                            <h3>payment</h3>
                        </div>
                        <div class="dashboard-head">
                            <h3>Date</h3>
                        </div>
                        <div class="dashboard-head">
                            <h3>Actions</h3>
                        </div>
                    </div>


                    <?php
                        require '../components/sub-request.php';
                    ?>

                </section>

            </section>

            <section class="admin-feedback-active display-none" id="all-feedback-admin" onclick="closeAdminNav()">
                <!-- feedback -->
                <div style="display: flex; align-items:center; margin:10px 0px;">
                    <h1>feedbacks</h1>
                    <p style="font-size: 13px; margin:10px 0px; color:silver;">20 messages</p>
                </div>
                <div class="job-container feedback">

                    <?php
                    require '../components/feedback.php';
                    ?>

                </div>

            </section>


        </div>
    </section>
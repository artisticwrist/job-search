<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../resources/css/style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <!-- navigaton bar sticked to the top of page-->
    <?php
        require "../components/nav.php";
    ?> 


    <section class="career-body">
        <h1>Popular Articles</h1>

        <section class="article_body">
            <div class="article_box">
                <img src="" alt="">
                <h1>Q&A with UNICAF’s Digital Marketing Manager, P. ...</h1>
                <p>LIFE AT WORK</p>
            </div>
            <div class="article_box">
                <img src="" alt="">
                <h1>Q&A with UNICAF’s Digital Marketing Manager, P. ...</h1>
                <p>LIFE AT WORK</p>
            </div>
            <div class="article_box">
                <img src="" alt="">
                <h1>Q&A with UNICAF’s Digital Marketing Manager, P. ...</h1>
                <p>LIFE AT WORK</p>
            </div>
        </section>

        <!-- Notification -->
        <section class="notification_box">
            <div class="notification_flex">
                <div class="bell">
                    <img src="../resources/images/svg/bell.svg" alt="">
                </div>
                <div class="notification_head">
                    <h5>Active Notification</h5>
                    <p>Stay productive - get the latest updates on Jobs & News</p>
                </div>
            </div>
            <div class="notification_flex">
                <button class="btn btn-warning"><a class="text-white text-decoration-none" href="../pages/signup.php">Join Us</a></button>
            </div>
        </section>

        <h1>Latest Articles</h1>
        <section class="article_body">
            <div class="article_box">
                <img src="" alt="">
                <h1>Q&A with UNICAF’s Digital Marketing Manager, P. ...</h1>
                <p>LIFE AT WORK</p>
            </div>
            <div class="article_box">
                <img src="" alt="">
                <h1>Q&A with UNICAF’s Digital Marketing Manager, P. ...</h1>
                <p>LIFE AT WORK</p>
            </div>
            <div class="article_box">
                <img src="" alt="">
                <h1>Q&A with UNICAF’s Digital Marketing Manager, P. ...</h1>
                <p>LIFE AT WORK</p>
            </div>
            <div class="article_box">
                <img src="" alt="">
                <h1>Q&A with UNICAF’s Digital Marketing Manager, P. ...</h1>
                <p>LIFE AT WORK</p>
            </div>
            <div class="article_box">
                <img src="" alt="">
                <h1>Q&A with UNICAF’s Digital Marketing Manager, P. ...</h1>
                <p>LIFE AT WORK</p>
            </div>
            <div class="article_box">
                <img src="" alt="">
                <h1>Q&A with UNICAF’s Digital Marketing Manager, P. ...</h1>
                <p>LIFE AT WORK</p>
            </div>
        </section>
    </section>

    <!-- footer-->
    <?php
        require "../components/footer.php";
    ?> 

    <script src="../resources/js/app.js"></script>
    <script src="../resources/js/scroll.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
</html>
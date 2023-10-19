<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require "../components/nav.php";
    ?>
    <!-- search jobs header -->
    <div class="form-jobs">
        <?php
     require "../components/search-job-form.php";
    ?>
    </div>


    <!-- jobs -->
    <section class="free-jobs">
        <h2>Available Jobs</h2>

        <?php
            require "../components/all-jobs.php";
        ?>
    </section>
    <?php
    require "../components/footer.php";
    ?>
</body>

</html>
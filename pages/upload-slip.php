<?php
require "../config/connect/connect.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if (isset($_SESSION['email']) && isset($_SESSION['password']) ) {
            
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $email = $_POST['email'];
        $sub_option = $_POST['sub_option'];
        $amount_paid = $_POST['amount'];
        $requestRow = "SELECT * FROM sub_request WHERE email = ?";
        $stmt = mysqli_prepare($con, $requestRow);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            echo "<script>
            alert('You are already on a plan. Contact customer care if you like to upgrade.')
            </script>";
        } else {
            if (isset($_FILES['slip'])) {
                $slip = $_FILES['slip']['name'];
                $imageTmp = $_FILES['slip']['tmp_name'];

                // Move the uploaded image to the designated directory
                $uploadPath = '../images/uploads/' . $slip;
                if (move_uploaded_file($imageTmp, $uploadPath)) {

                $plan = $_POST['plan'];
            // Set package price and start count to user balance
            
            if ($plan === 'one-month') {
                $plan = "1 Month";
            } elseif ($plan === 'three-months') {
                $plan = "3 Months";
            } elseif ($plan === 'one-year') {
                $plan = "1 Year";
            } elseif ($plan === 'unlimited') {
                    $plan = "Unlimited";
            }

        //inserts to either user sub scription or employer subscription
        
        if($sub_option == "user_sub"){
            // Insert data into package table
            $sql = "INSERT INTO user_request (email, plan, slip, amount) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($con, $sql);
            mysqli_stmt_bind_param($stmt, "sssd", $email, $plan, $slip, $amount_paid);
            $query = mysqli_stmt_execute($stmt);
        }elseif ($sub_option == "employer_sub") {
            $sql = "INSERT INTO sub_request (email, plan, slip, amount) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($con, $sql);
            mysqli_stmt_bind_param($stmt, "sssd", $email, $plan, $slip, $amount_paid);
            $query = mysqli_stmt_execute($stmt);
        }


        if ($query) {
                echo "<script>
        alert('Application sent successfully. Application will be responded to within 24hrs.');
        </script>";
        echo "<script>setTimeout(function(){window.location.href='../pages/jobs.php'},300);</script>";
        } else {
            echo "Error trying to submit application. Please try again later.";
        }
        } else {
            echo "Error uploading file.";
        }
        } else {
            echo "Slip file not found.";
        }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>


<body style="height: 100vh;display:flex; justify-content:center;align-items:center;flex-direction:column;">

    <section class="find-job-section">
        <h1 class="logo">Job search</h1>
        <p style="color: #40514e70;margin:5px;">Upload Payment</p>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" class="fill-form"
            enctype="multipart/form-data">
            <input type="email" placeholder="type email" name="email" class="text-input">
            <select name="plan" id="" class="text-input">Packages
                <option value="one-month">1 Month</option>
                <option value="three-months">3 Months</option>
                <option value="one-year">1 Year</option>
            </select>
            <select name="sub_option" id="">
                <option value="user_sub">User Subscription</option>
                <option value="employer_sub">Employer Subscription</option>
            </select>

            <select name="amount" id="" class="text-input">
                <option value="50"> $50 </option>
                <option value="100"> $100 </option>
                <option value="500"> $500 </option>
            </select>

            <input type="file" name="slip">
            <button name="submit" type="submit">Send</button>
        </form>

        <button class="btn btn-link"><a href="../pages/jobs.php" class="text-decoration-none ">Back</a></button>
    </section>

</body>

</html>

<?php
    }else{
        echo "Not permitted to view this page";
    };
?>
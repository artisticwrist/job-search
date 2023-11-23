<?php

    if(isset($_POST['submit'])){

        $requestRow = "SELECT * FROM sub-request where user_id='$userid'";
        $packageQuery = mysqli_query($con,$packageRow);

        if(mysqli_num_rows($packageQuery)> 0){
            echo "<script>alert('You are already on a plan. Contact customer care if you like to upgrade.')</script>";
        }else{
            $paymentProof = $_FILES['image']['name'];
            $imageTmp = $_FILES['image']['tmp_name'];
            
            // Move the uploaded image to the designated directory
            $uploadPath = '../images/uploads/' . $paymentProof;
            move_uploaded_file($imageTmp, $uploadPath);

            $package = $_POST['package'];

            // set package price and start count to user balance
            if($package === 'one-month'){
                $plan = "1 Month";
            }elseif($package === 'three-months'){
                $plan = "3 Months";
            }elseif($package === 'one-year'){
                $plan = "1 Year";
            }elseif($package === 'unlimited'){
                $plan = "Unlimited";
            }
        
        
        
            // insert data to pacakage table
        
            $sql = "insert into `package` (user_id,user_email,user_verified,package,current_balance,rio,payment_proof) values('$userid','$user_email','$user_verified', '$package',  '$current_balance', '$rio','$paymentProof')";
        
            $query = mysqli_query($con,$sql);
        
            if($query){
                echo "<script>alert('Application sent successfully. Appliaction will be responded to within 24hrs.');</script>";
            }else{
                echo "Error trying to submit application. PLease try again later.";
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
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>


<body style="height: 100vh;display:flex; justify-content:center;align-items:center;flex-direction:column;">

    <section class="find-job-section">
        <h1 class="logo">Job search</h1>
        <p style="color: #40514e70;margin:5px;">Upload Payment</p>

        <form action="../config/new-admin.php" method="POST" class="fill-form">
            <input type="text" placeholder="full name(must match name on slip)" name="fulll name" class="text-input">
            <select name="" id="" class="text-input">Packages
                <option value="one-month">1 Month</option>
                <option value="three-months">3 Months</option>
                <option value="one-year">1 Year</option>
                <option value="unlimited">Unlimited</option>
            </select>
            <input type="file" placeholder="choose payment image" name="slip">
            <button name="submit" type="submit">Send</button>
        </form>
        <button class="btn btn-link"><a href="../pages/jobs.php" class="text-decoration-none ">Back</a></button>
    </section>

</body>

</html>
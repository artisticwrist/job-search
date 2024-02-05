<?php

$host = "localhost"; // Assuming MySQL server is on the same machine as the web server
$username = "root";//calmvyru_orp
$password = "";//Calmyrdfg11@.
$database = "job"; //calmvyru_pro

// Establish MySQLi connection
$con = mysqli_connect($host, $username, $password, $database);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// // Establish connection
// $con = mysqli_connect($host, $username, $password, $database);

// // Close connection
// mysqli_close($con);

?>

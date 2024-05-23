<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "Grace";

// Corrected the condition in the if statement
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$con) {
    exit("Failed to connect: " . mysqli_connect_error());
}


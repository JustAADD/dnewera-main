<?php

//main connection file for both admin & front end
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "dnewera_db"; //databases

// Create connection
$mysqli = mysqli_connect($hostname, $username, $password, $dbname); // connecting 
// Check connection

if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}

// mysqli_close($con);
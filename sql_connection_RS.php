<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "movie_db";

//Create connection
$link =  mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_error()) { 
    die("Connection failed: " . mysqli_connect_error());  
}

echo "Connected successfully";

?>
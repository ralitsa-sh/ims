<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "movie_db";

$link = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_error()) {
    die("Connection failed: " . mysqli_connect_error());
}

$fetch_genres = $link->query("SELECT * FROM genres");
?>
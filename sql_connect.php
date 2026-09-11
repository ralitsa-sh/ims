<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "movie_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";

//  Query to select all records from the movies table
$sql = "SELECT * FROM movies";
$result = $conn->query($sql);
echo $result->num_rows . " records found in the movies table.<br>";
foreach ($result as $row) {
    echo "Name: " . $row["mname"] . "<br>";
    echo "Year: " . $row["myear"] . "<br>";
    echo "Rating: " . $row["mrating"] . "<br>";
}

// Insert movie record into the movies table


// Close connection
$conn->close();

?>
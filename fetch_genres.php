<?php
// Database connection parameters
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

// Query to select all genres from the genres table
$sql = "SELECT mgenre FROM genres";
$stmt = $conn->prepare($sql);
$stmt->execute();

// Get the result set from the executed query
$result = $stmt->get_result();
// foreach ($result as $genre) {
//     echo $genre['mgenre'] . "<br>";
// }

// Close the database connection
$conn->close();
?>
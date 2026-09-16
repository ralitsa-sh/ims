<?php
// Open a connection to the database
include 'db_open_RH.php';

// Query to select all genres from the genres table
    // Create query
$sql_genres = "SELECT mgenre FROM genres";
    // Prepare query
$stmt_genres = $conn->prepare($sql_genres);
    // Execute query
$stmt_genres->execute();

// Get the result set from the executed query
$result_genres = $stmt_genres->get_result();

// Close the database connection
$conn->close();
?>
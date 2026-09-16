<!DOCTYPE html>
<html>
<body>
    <h2>Movie Database</h2>

<!-- Link back to index.php -->
<a href="index_RH.php">Movie Submission Form</a>

<!-- Fetch movies from database -->
 <?php
include 'db_open_RH.php';
// Query to select all movies from the movies table
$sql_movies = "SELECT mname, myear, mgenre, mrating FROM movies";
$stmt_movies = $conn->prepare($sql_movies);
$result_movies = $stmt_movies->execute();
 ?>

<!-- HTML table listing all movies in db -->
 <table>
    <tr><th>Name</th><th>Year</th><th>Genre</th><th>Rating</th></tr>
    <?php
    foreach ($result_movies as $movie) {
        echo "<tr><td>" . $movie['mname'] . "</td><td>" . $movie['myear'] . "</td><td>" . $movie['mgenre'] . "</td><td>" . $movie['mrating'] . "</td></tr>";
    }
    ?>
</table>
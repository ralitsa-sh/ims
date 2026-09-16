<!DOCTYPE html>
<html>
<body>
    <h2>Movie Database</h2>

<!-- Link back to index.php -->
<a href="index_RH.php">Movie Submission Form</a>

<!-- Form for movie name seach, reloads the page -->
<form action="/showmovies_RH.php" method="post">
    <label for="mname_search">Search by movie name:</label><br>
    <input type="text" id="mname_search" name="mname_search"><br><br>
    <input type="submit" value="Search">
</form>

<!-- If search is submitted, use it to filter the results -->
<?php
if (isset($_POST['mname_search'])) {
    $search_term = "%" . $_POST['mname_search'] . "%"; // Use wildcard for partial matches
} else {
    $search_term = '%'; // Default to all movies if no search term is provided
}
?>

<!-- Fetch movies from database -->
 <?php
include 'db_open_RH.php';
// Query to select all movies from the movies table
$sql_movies = "SELECT mname, myear, mgenre, mrating FROM movies WHERE mname LIKE ?";
$stmt_movies = $conn->prepare($sql_movies);
$stmt_movies->bind_param("s", $search_term);
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
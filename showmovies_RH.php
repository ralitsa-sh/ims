<!DOCTYPE html>
<html>
<head>
<style>
    /* table {
        border-spacing: 30px;
    } */
    th, td {
        text-align: left;
        padding-right: 20px;
    }
</style>
</head>

<body>
    <h2>Movie Database</h2>

<!-- Link back to index.php -->
<a href="index_RH.php">Movie Submission Form</a>
<br><br>

<!-- Form for movie name seach, reloads the page -->
<form action="/showmovies_RH.php" method="post">
    <label for="mname_search">Search by movie name:</label><br>
    <input type="text" id="mname_search" name="mname_search"><br><br>
    <input type="submit" value="Search">
</form>
<br><br>

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
//  Open a connection to the database
include 'db_open_RH.php';

// Query to select all (or search for) movies from the movies table
    // Create query
$sql_movies = "SELECT mname, myear, mgenre, mrating FROM movies JOIN genres ON movies.mgenreid = genres.gid WHERE mname LIKE ?";
// $sql_movies = "SELECT * FROM movies";
    // Prepare query
$stmt_movies = $conn->prepare($sql_movies); // This is causing an error
    // Bind the search term parameter
$stmt_movies->bind_param("s", $search_term);
    // Execute query
$stmt_movies->execute();
    // Get the result
$result_movies = $stmt_movies->get_result();

// Display row count returned
echo "Number of movies found: " . $result_movies->num_rows . "<br>";
// Display search term if provided
if (isset($_POST['mname_search']) && !empty($_POST['mname_search'])) {
    echo "Filter by movie name containing: '" . $_POST['mname_search'] . "'<br>";
}
echo "<br>";
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

<!-- Close the database connection -->
<?php
$conn->close();
?>
<!Doctype html>
<html>
<body>

<h2>Movie Submission Result</h2>

<!-- Link back to showmovies.php -->
<a href="index_RH.php">Return to form</a><br><br>

<!-- Process the submitted movie data -->
<?php
// Retrieve values from the POST request
$mname = $_POST['mname'];
$myear = $_POST['myear'];
$mgenre = $_POST['mgenre'];
$mrating = $_POST['mrating'];

// Open a connection to the database
include 'db_open_RH.php';

// Lookup the genre ID based on the selected genre name
$sql_genre_id = "SELECT gid FROM genres WHERE mgenre = ?";
$stmt_genre = $conn->prepare($sql_genre_id);

    // Bind movie genre param and execute
$stmt_genre->bind_param("s", $mgenre);
$stmt_genre->execute();

    // Get the result from the genre lookup
$result_genre = $stmt_genre->get_result();
$row_genre = $result_genre->fetch_assoc();
$mgenre_id = $row_genre['gid'];


// Insert the movie data into the database
$sql_insert = "INSERT INTO movies (mname, myear, mgenreid, mrating) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql_insert);

    // Bind parameters into the query and execute
$stmt->bind_param("sssi", $mname, $myear, $mgenre_id, $mrating);
$result = $stmt->execute();

    // Check if the insertion was successful
if ($result) {
    echo "Movie submitted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the database connection
$conn->close();

// Redirect to index_RH.php
header("Location: " . "index_RH.php");
die();
?>

</body>
</html>
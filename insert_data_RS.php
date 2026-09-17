<!Doctype html>
<html>
<body>

<!-- Link back to showmovies.php -->
<a href="index_RS.php">Return to form</a><br>

<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "movie_db"; 

// Create connection
$link = mysqli_connect($servername, $username, $password, $dbname);

// Check if connection is established
if (mysqli_connect_error()) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve values from the POST request
$mid = $_POST['mid'];
$mname = $_POST['mname'];
$myear = $_POST['myear'];
$mgenre = $_POST['mgenre'];
$mrating = $_POST['mrating'];

$sql_genre_id = "SELECT * FROM genres WHERE mgenre = ?";
$stmt_genre = $link->prepare($sql_genre_id);

$stmt_genre->bind_param("s", $mgenre);
$result_genre = $stmt_genre->execute();


$result_genre = stmt_genre->get_result():
$row_genre = $result_genre->fetch_assoc();
$mgenre_id = $row_genre['gid'];


$sql = "INSERT INTO movies (mname, myear, mgenre, mrating ) VALUES (?, ?, ?, ?)";
$stmt = $link->prepare($sql);

$stmt->bind_param("sssi", $mname, $myear, $mgenre_id, $mrating);
$result = $stmt->execute();

if ($result) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close the database connection
$link->close();


</body>
</html>
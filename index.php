<!Doctype html>
<html>
<body>
    <h2>Movie Database Submission Form</h2>

<!-- Form for submitting a movie to db -->
<form action="/submit_movie.php" method="post">
    <!-- Movie name -->
    <label for="mname">Movie name:</label><br>
    <input type="text" id="mname" name="mname"><br><br>

    <!-- Movie year -->
    <label for="myear">Movie year:</label><br>
    <input type="text" id="myear" name="myear"><br><br>

    <!-- Genre dropdown list -->
    <label for="mgenre">Movie genre:</label><br>
    <select id="mgenre" name="mgenre">
        <option value="Action/Adventure">Action/Adventure</option>
        <option value="Comedy">Comedy</option>
        <option value="Drama">Drama</option>
        <option value="Fantasy/Sci-Fi">Fantasy/Sci-Fi</option>
    </select><br><br>

    <!-- Movie rating 1-5 -->
    <label for="mrating">Movie rating:</label><br>
    <input type="number" id="mrating" name="mrating" min="1" max="5"><br><br>

    <!-- Form submit button -->
    <input type="submit" value="Submit">
</form>



<!-- Link to showmovies.php -->

</html>
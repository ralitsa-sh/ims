<?php
include 'get_genres_RS.php';
?>

<!DOCTYPE html>
<html>
<body>

<h2> Add a new movie</h2>

<form action="/insert_data_RS.php" method="POST">
    <label for="mname">Movie name:</label><br>
    <input type= "text" id="mname" name="mname"><br>
    <label for="myear">Movie year:</label><br>
    <input type="text" id="myear" name="myear"><br>
    <label for="mgenre">Movie genre:</label><br>
    <select id="mgenre" name="mgenre">
        <?php
        foreach ($fetch_genres as $genre) {
             echo "<option value='" . $genre['mgenre'] . "'>" . $genre['mgenre'] . "</option>";
        }
        ?>
    </select><br>

    <label for="mrating">Movie rating:</label><br>
    <input type="text" id="mrating" name="mrating"><br>
    <input type="submit" value="Submit">
  
</form>


</body>
</html>

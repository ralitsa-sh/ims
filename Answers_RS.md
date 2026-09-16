## Create_table.sql ##

This file creates a new table in the database.
columns - ID, name, domain, propulsion
store text, max 255 characters
ID primary key
AUTO_INCREMENT tells it to generate the next ID automatically


## get_data.php ## = showmovies.php

<?php - open
?> - close

$name = "value";

variable that stores the connection to the database
to check if the connection to the database is working

echo prints = print() in python

Since the browser interprets whatever gets sent to it as HTML (not as plain visible text), it doesn't display the tags themselves — instead, it renders them.

we are calling $link because it holds the active connection to the database and we need this connection to send a query. 

The -> operator is used to access properties or call methods that belong to an object - here $link is an object

-> query(...) is  a method. It sends the sql string given to it - the $sql to the database for execution and returns something that is then stored in $result

we are accessing a property names num_rows that belongs to the $result object, it's a piece of data attached to the $result

first it checks if there are 0 rows on the table.
If they are more than 0, it goes in the while loop.
There it uses the method fetch_assoc() to grab the next row from $result.
It goes on until the condition is false - there are no more rows left
If there are no rows to begin with it goes to else

echo </table> prints the whole table

## index.php ## = index_RS.php

the index.php file is the landing page, the starting page where the user comes to first.

## insert_data.html ## = file that i will create?

A form in HTML is an element,  written as <form>...</form> and it's used to collect input from a user on a webpage and then send that input for processing

action="insertdata.php" this tells the browser where to send the form's data once submitted in this case to insertdata.php

method="POST" is an attribute of the <form> tag
all that submitted data available through the $_POST superglobal array

## insertdata.php ## = insert_data_RS.php

$_POST is a superglobal array that PHP automatically creates and fills with data submitted from an HTML form using method="POST". Each key in the array matches the name attribute of a form input, and the value is whatever the user typed or selected.

prepare() is a method that sends a SQL statement to the database ahead of time, as a kind of template — with placeholders (?) standing in for actual values that get filled in later, in a separate step.

bind_param is a method called on $stmt (the prepared statement from $link->prepare(sql))
it fills in the three ? 

execute() is another method — this one belongs to $stmt (the prepared statement object), and it's the step that actually runs the query against the database, using whatever values were just bound in with bind_param().

Up until execute() is called, nothing has actually happened to your database yet — you've only prepared the query and bound some values to it. execute() is the moment the insert actually takes place: the database receives the fully-assembled query (template + bound values combined) and runs it for real, creating the new row in the animals table
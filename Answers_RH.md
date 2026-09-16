## Create_table.sql

Creates a table (animals)
Columns id, name, domain, and propulsion.
ID goes 1,2,3,... automatically
other data is string max 255 characters
ID is primary key

## Get_data.php

line 1, 28 designates a section of php syntax
<?php
?>

variables identified by $ prefix
$var = value;

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "things"; name of database to connect to

Line 8, a link object for connecting to the database
Line 10-12, check if the connection failed so we don't excecute more code that depends on the connection existing.

Line 14, echo prints stuff
R: print()

The echo returns the html code, which is opening a table with the column headers (closing comes later).

Line 17, 
the link because we need to use the connection,
the '->' is a method operator (it's just a pipe)
the query() runs a query and needs some SQL code

Line 19,
it's a method that retrieves a specific internal value (not neccessarily exposed to the user if you inspect the object)
in this case, it's the nrow count of the returned table

Line 19-25,
check that the table isn't empty
loop over rows to print the html with values
the output will be the contents of the table

## index.php

front page

## Insert_data.html


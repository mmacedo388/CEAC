<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "book_the_books";

//making the connection to mysql
$dbc = mysqli_connect($hostname, $username, $password, $dbname) OR die("could not connect to database, ERROR: ".mysqli_connect_error());

//set encoding
mysqli_set_charset($dbc, "utf8");

?>
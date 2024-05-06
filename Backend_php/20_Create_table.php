<?php
// connecting to the Database
$servername = "localhost";
$username = "root";
$password = ""; // no password need
$database = "db_dheeraj"; // connect specific database


// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection is successful <br>";
}

// Create a table in the db
$sql = "CREATE TABLE `phplogin` (`sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `email` VARCHAR(15) NOT NULL , `password` VARCHAR(15) NOT NULL , PRIMARY KEY (`sno`))";
$result = mysqli_query($conn, $sql);

// check for the table creation success
if($result){
  echo "The table was created successfully!<br>";
}
else {
  echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
}







/*
Creating a Table in MySQL using php
Introduction
In this tutorial we will learn to create a table in MySQL using phpMyAdmin. We will use the same script, which was used in the last tutorial and modify it. 

Creating a table
We will create a new function called $database for creating the table in the specified database. Now we will create another function called $sql and we will write the specified sql query to make a table(Note we don't need to add the database name in the query as we have already added it on $database function). Now to check if the table was created successfully or not we need to use an "if-else" statement and the code should look like this.

// Create a table in the db (Here Table Name is phptrip )
$sql = "CREATE TABLE `phptrip` ( `sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";
$result = mysqli_query($conn, $sql);

// Check for the table creation success
if($result){
    echo "The table was created successfully!<br>";
}
else{
    echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
}

*/
?>
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

/*
// variable to be inserted into the table
$name = "Niraj";
$email = "nk@gmail.com";
$password = "nk------";

// Sql query to be executed
$sql = "INSERT INTO `phplogin` ( `name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
*/

//or we can use this
$sql = "INSERT INTO `phplogin` (`name`, `email`, `password`) VALUES ('saurabh', 'sk@gmail.com', 'sk-----2')";

// Add a new login record in the database
$result = mysqli_query($conn, $sql);


// Check for the table creation success
if($result){
  echo "The table was created successfully!<br>";
}
else {
  echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
}















/*
Insert Data Into MySQL Using MySQLi using php

Introduction
In this tutorial we will learn to insert data into MySQL database using PHP. We will use MySQLi.

Inserting Data
Let's open our favourite code editor VSCode and start coding. We are going to connec to the database using the following code

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbharry";

Now we will try to establish a connection to the database using a simple if-else method.

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

Now we need to run the sql query. We can copy sql query from the console as described in the video or we can write our own sql query. We just need to create a function to run the sql query. We can also add variables that can be inserted to the table using this method. We just need to create a variable function and then we need to use those variable function on the sql query in order to run. Then we can also use the if-else condition to check if the data was intserted or not. Like this :

// Variables to be inserted into the table
$name = "Vikrant";
$destination = "Russia";

// Sql query to be executed
$sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo "The record has been inserted successfully successfully!<br>";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}

*/
?>
<?php
echo "Welcome to the stage where we are ready to get connected to a database" . "<br>";

/* 
Ways to connect to a MySQL Database
1. MySQLi extension (mysql improve extension)
2. PDO (php document object)
*/

// connecting to the Database
$servername = "localhost";
$username = "root";
$password = ""; // no password need

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection is successful";
}

// Create a db
$sql = "CREATE DATABASE db_Dheeraj1";
// Execute the query
/*
if (mysqli_query($conn, $sql)){
    echo "The db is created successfully";
}
*/

// Execute the query
$result = mysqli_query($conn, $sql);

// Check for the table creation success
if($result){
    echo "The db is created successfully";
}
else {
  echo "The db was not created successfully because of this error ---> " .mysqli_error($conn);
}

/*
ntroduction
In this tutorial we are going to create MySQL database using php. In the last tutorial we have learnt to connect to the MySQL database using php. Now we will learn to create a new database using php, so let's fireup our favourite IDE VsCode and start coding

Instructions:
We need to create a function in the previous tutorial script which will run raw sql query on phpMyAdmin to create databases and stuff. So let's create a database using the following lines. 

//Create a Database
$sql = "CREATE DATABASE dbHarry2";
mysqli_query($conn, $sqli);

Now if we refresh the phpMyAdmin page we will see the newly created dbHarry2 database. 

Checking if the Database was created successfully or not:
We can also get the result of the query using the following lines. Note that the reult will return True or False only.

echo "The result is ";
echo var_dump($result);
echo"<br>";

or we can also use an "if else" statement to return the result. 

// Check for the database creation success
if($result){
    echo "The db was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}

*/

?>

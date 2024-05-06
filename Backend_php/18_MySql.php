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

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre>
  Introduction 
In this tutorial, we will learn to connect the MySQL database from PHP code. So let's open our favorite code editor VS Code, make a PHP file, fire up XAMPP and start coding.

MySQL
 MySQL is a database system. In our last tutorial, we have learned about databases and how it works. Now let's see what SQL stands for. SQL stands for the structured query language. It is used to run various tasks on databases. It is also cross-platform compatible. Now let's write the script and continue. 

Connecting to the Database
Now to connect our script to the MySQL databases we have 2 options.

MySQLi extension.
PDO.
MySQLi:  MySQLi is an open-source relational database management system that is used on the web. This database system is reliable for both small and large applications.

PDO: PHP Data Object is a PHP extension that defines a lightweight and consistent interface for accessing a database in PHP. It is a set of PHP extensions that provide a core PDO class and database-specific driver. 

Using MySQLi:
We need to create 3 variables for $servername, $username and $password. Now we will connect to the server using mysqli_connect. We will also add an extra feature to the code like if the connection was not established then it will end the program with an error message. For that, we will use the die feature. For better understanding
  </pre>
</body>
</html>
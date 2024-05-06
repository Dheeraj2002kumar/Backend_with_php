<?php
// connecting to the Database
$servername = "localhost";
$username = "root";
$password = ""; // no password need
$database = "contacts"; // connect specific database


// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection is successful <br>";
}

$sql = "SELECT * FROM `contactus`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo "records found in the DataBase<br>";
echo "<br>";


// Display the rows returned by the sql query
if($num > 0){
  // $row = mysqli_fetch_assoc($result);
  // echo var_dump($row);
  // echo "<br>";
  // $row = mysqli_fetch_assoc($result);
  // echo var_dump($row);
  // echo "<br>";
  // $row = mysqli_fetch_assoc($result);
  // echo var_dump($row);
  // echo "<br>";
  // $row = mysqli_fetch_assoc($result);
  // echo var_dump($row);
  // echo "<br>";
  // $row = mysqli_fetch_assoc($result);
  // echo var_dump($row);
  // echo "<br>";

  // we can fetch in a better way using the while loop
  while($row = mysqli_fetch_assoc($result)){
    // echo var_dump($row);
    echo $row['sno']. ". Hello " . $row['name'] . "Your email is " . $row['email'] . "and your concern is " . $row['concern'] . "And your sumbition time is " .  $row['Date'];
    echo "<br>";
    echo "<br>";
  }
}


?>
<html>
<body>

<h1>Welcome to my home page!</h1>
<?php include 'noFileExists.php';
echo "I have a $color $car.";
?>
<!-- The require statement is also used to include a file into the PHP code.

However, there is one big difference between include and require; when a file is included with the include statement and PHP cannot find it, the script will continue to execute: -->

<!-- Use require when the file is required by the application.

Use include when the file is not required and application should continue when file is not found. -->
</body>
</html>
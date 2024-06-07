<html>
<body>

<h1>Welcome to my home page!</h1>
<?php require 'noFileExists.php';
echo "I have a $color $car.";
?>

<!-- If we do the same example using the require statement, the echo statement will not be executed because the script execution dies after the require statement returned a fatal error: -->

<!-- Use require when the file is required by the application.

Use include when the file is not required and application should continue when file is not found. -->
</body>
</html>

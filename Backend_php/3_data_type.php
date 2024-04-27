<?php
$name = "Dheeraj";
$income = 200;

/* php data types
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. NULL
*/

echo "String - sequence of characters" . "<br>";
$name = "Dheeraj";
$friend = 'Rohan';
echo "$name ka friend is $friend";
echo "<br>";
echo "<br>";

echo "Integer - Non decimal number" . "<br>";
$income = 455;
$debts = -655;
echo $income;
echo "<br>";
echo $debts;
echo "<br>";
echo "<br>";

echo "Float - Decimal point number" . "<br>";
$income = 344.5;
$debts = -45.5;
echo $income;
echo "<br>";
echo $debts;
echo "<br>";
echo "<br>";

echo "Boolean - Can be either true or false" . "<br>";
$x = true;
$is_friend = false;
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
echo "<br>";
echo "<br>";

echo "Object - Instances of classes" . "<br>";
echo "Employee is a class ---> harry can be one object" . "<br>";
echo "<br>";

echo "Array - Used to store multiple values in a single variable" . "<br>";
$friends = array("rohan", "shubham", "skillf", "Larry");
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";
echo "<br>";
//echo $friends[4]; // will throw an error as the size of array is 4

echo "NULL";
$name = NULL;
echo var_dump($name);
?>

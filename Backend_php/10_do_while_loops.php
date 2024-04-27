<?php

echo "Welcome to do while loops <br>";


// while(condition)
// {
//                 Some piece of code to be executed here;
// }  

/*

do {
    some lines of code to be executed here;
    ...
} while(condition);

*/

$i = 0;

do{
    echo "$i <br>";
    $i++;
}while($i<5);


echo "<br>";
$i=80;
do{

  echo “Printing $i”;

  $i++;

}while($i<5);
?>
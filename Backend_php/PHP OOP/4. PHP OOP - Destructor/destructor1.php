<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
  
<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name){
    $this->name = $name;
  }
  function __destruct(){
    echo "The fruit is {$this->name}.";
  }
}

$apple = new Fruit("Apple");
?>
</body>
</html>
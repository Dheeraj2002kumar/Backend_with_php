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
  function get_name(){
    return $this->name;
  }
}

$apple = new Fruit("Apple");
echo $apple->get_name();
?>

</body>
</html>
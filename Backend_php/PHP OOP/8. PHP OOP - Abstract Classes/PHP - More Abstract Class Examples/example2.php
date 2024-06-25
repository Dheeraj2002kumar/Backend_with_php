<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
abstract class ParentClass {
  // abstract method with an argument
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
  public function PrefixName($name) {
    if ($name == "Dheeraj Kumar") {
      $prefix = "Mr.";
    } elseif ($name == "Niharika Roy"){
      $prefix = "Mrs.";
    } else {
      $prefix = "";
    }
    return "{$prefix} {$name}";
  }
}

$class = new ChildClass;
echo $class->prefixName("Dheeraj Kumar");
echo "<br>";
echo $class->prefixName("Niharika Roy");
?>
</body>
</html>
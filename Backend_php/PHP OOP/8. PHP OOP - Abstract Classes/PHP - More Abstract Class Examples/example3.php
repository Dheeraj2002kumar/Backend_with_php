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
    // The child class may define optional arguments that is not in the parent's abstract method
    public function prefixName($name, $separator = ".", $greet = "Dear") {
      if ($name == "Dheeraj Kumar") {
        $prefix = "Mr";
      } elseif ($name == "Niharika Roy") {
        $prefix = "Mrs";
      } else {
        $prefix = "";
      }
      return "{$greet} {$prefix}{$separator} {$name}";
    }
  }

  $class = new ChildClass;
  echo $class->prefixName("Dheeraj Kumar");
  echo "<br>";
  echo $class->prefixName("Niharika Roy");
  ?>
</body>
</html>
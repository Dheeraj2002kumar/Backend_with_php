**PHP - What is Inheritance?
Inheritance in OOP = When a class derives from another class.

The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.

An inherited class is defined by using the extends keyword.

Let's look at an example:
<a href="">Program 1</a>

**Example Explained
The Strawberry class is inherited from the Fruit class.

This means that the Strawberry class can use the public $name and $color properties as well as the public __construct() and intro() methods from the Fruit class because of inheritance.

The Strawberry class also has its own method: message().

**PHP - Inheritance and the Protected Access Modifier
In the previous chapter we learned that protected properties or methods can be accessed within the class and by classes derived from that class. What does that mean?

Let's look at an example:
<a href="">Program 2</a<|end_header_id|><|start_header_id|><|start_header_id|><|start_header_id|>assistant<|end_header_id|>

In the example above we see that if we try to call a protected method (intro()) from outside the class, we will receive an error. public methods will work fine!

Let's look at another example:

<a href="">Program 3</a>

In the example above we see that all works fine! It is because we call the protected method (intro()) from inside the derived class.

**PHP - Overriding Inherited Methods
Inherited methods can be overridden by redefining the methods (use the same name) in the child class.

Look at the example below. The __construct() and intro() methods in the child class (Strawberry) will override the __construct() and intro() methods in the parent class (Fruit):

<a href="">Program 4</a>

**PHP - The final Keyword
The final keyword can be used to prevent class inheritance or to prevent method overriding.

The following example shows how to prevent class inheritance:
<a href="">Program 5</a>

The following example shows how to prevent method overriding:
<a href="">Program 6</a>



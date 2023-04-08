<?php
class MyClass {
    public $name;
    public $age;
  
    // constructor
    public function __construct($name, $age) {
      $this->name = $name;
      $this->age = $age;
    }
  }
  
  // create an object of MyClass
  $myObj = new MyClass("John", 30);
  
  // access the properties of the object
  echo $myObj->name; // outputs "John"
  echo $myObj->age; // outputs 30
  
?>
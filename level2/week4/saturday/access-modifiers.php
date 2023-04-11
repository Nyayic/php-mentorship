<?php
class MyClass {
    public $publicProperty;
    private $privateProperty;
    protected $protectedProperty;
  
    public function publicMethod() {
      // code that can be accessed from anywhere
    }
    private function privateMethod() {
      // code that can only be accessed within the class
    }
    protected function protectedMethod() {
      // code that can be accessed within the class and any child classes
    }
  }
  
  // create an object of MyClass
  $myObj = new MyClass();
  // access public property and method
  $myObj->publicProperty = "public"; // OK
  $myObj->publicMethod(); // OK
  // access private property and method
  $myObj->privateProperty = "private"; // Error
  $myObj->privateMethod(); // Error
  // access protected property and method
  $myObj->protectedProperty = "protected"; // Error
  $myObj->protectedMethod(); // Error
?>
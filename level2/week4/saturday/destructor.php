<?php
class MyClass {
    public function __construct() {
      // constructor code
    }
  
    // destructor
    public function __destruct() {
      // destructor code
    }
  }
  
  // create an object of MyClass
  $myObj = new MyClass();
  
  // destroy the object
  unset($myObj);
  
?>
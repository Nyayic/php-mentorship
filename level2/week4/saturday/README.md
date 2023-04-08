# CONSTRUCTORS AND DESTRUCTORS
## CONSTRUCTOR
- In PHP, constructors are special methods that are automatically called when an object of a class is created. 
- Constructors are used to initialize the properties of an object with default values or user-defined values.
- To create a constructor in PHP, you need to define a method with the same name as the class.
- - can also be used to initailize property of a class 

## DESTRUCTORS
- In PHP, destructors are special methods that are automatically called when an object of a class is destroyed or unset. 
- Destructors are used to perform cleanup tasks such as releasing resources or closing database connections before the object is destroyed.
- To create a destructor in PHP, you need to define a method with the name __destruct. 

### ACCESS MODIFIERS
In PHP, access modifiers are keywords that are used to control the visibility and access of class properties and methods. There are three types of access modifiers in PHP: public, private, and protected.

- public: The public modifier allows the property or method to be accessed from anywhere, inside or outside of the class. It has no restrictions on its access.

- private: The private modifier restricts the property or method to be accessed only from within the class in which it is defined. It cannot be accessed from outside the class or even from the child classes that inherit from it.

- protected: The protected modifier allows the property or method to be accessed only from within the class in which it is defined, and also from any child classes that inherit from it. It cannot be accessed from outside the class hierarchy.
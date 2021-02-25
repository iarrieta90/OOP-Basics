# THEORETICAL PART

### What is object-oriented programming in general terms?
Procedural programming is about writing procedures or functions that perform operations on the data, while object-oriented programming is about creating objects that contain both data and functions.


### What is a class?
Classes are the units that encapsulate the necessary constants, variables and methods to create an object.
A class is a template for objects.

### What is an object?
An object is an instance of a class.
When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

### What is an instance?
An instance is a new context that is created based on a model. All instances of a model have the same data structure, but values are different.

### What is a property?
Properties are the variables that an object contains, they define the characteristics of an object. Class properties can be defined as public, protected or private.

### What is a method?
Methods are functions defined in a class. They define the behaviour of the class.

### What is the difference between a function and a method?
Both functions and methods are a set of instructions to perform a task, but a method is associated with an object and a function isn't.

### What is a constructor?
A constructor is a magic method that allows initializing an object's properties upon its creation.
If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

### What is the difference between a class, an object and an instance?
Classes are rules for creating objects, but those objects only come into existence once the class is instantiated by using the 'new' keyword.

### What do we understand by the concept of encapsulation?
Encapsulation is the concept of packing related properties and methods into a class. 
This allows us to define how the interactions will be both inside and outside our classes, and deciding their visibility.

### What do we understand by the concept of abstraction?
Abstraction aims to handle complexity by hiding unnecessary details from the user, and focusing only on necessary details.
Hidding the unnecessary properties and methods from the outside gives us some benefits such as:
- Make the interface of the objects simpler and easier to use
- Reduce the impact of change and make code more maintainable

### What do we understand by the concept of inheritance?
When you extend a class, the child class inherits all public and protected properties from the parent class.
This allows the implementation of additional functionalities in similar objects without the need to reimplement and repeat code for all shared functionalities, thus eliminating redundant code. 

### What do we understand by the concept of polymorphism?
Polimirphism is the ability of an object to take on many forms. In OOP Polimorphism describes a pattern in which a class has a varying functionality while sharing a common interface.

### What do we understand by the concept of Overload?
Overloading a method means that two or more methods have the same method name with different arguments.
Functions/method overloading contains the same function name, but that function performs different tasks according to the arguments passed.

### What do we understand by the concept of Override?
Overriding a method means that a subclass redefines an inherited method when it needs to change or extend the behaviour of that method.

### What differences exist between the concept of Overload and Override?
- Overloading is being done in the same class while for overriding base and child classes are required
- Overloading happens at compile-time while Overriding happens at runtime

### What is a static class?
A static class is a type of class that is instantiated only once in a program. It must contain a static member (variable) or a static member function (method) or both. The variables and methods are accessed without the creation of an object, using the scope resolution operator(::).  the static method cannot access the non-static variables because that will require the creation of the object first. So, to access variables of a static class we must declare them as static using keyword static

### Look for 3 advantages over object-oriented programming compared to other programming paradigms:
- Improved productivity: _we can reuse code in an easy way and code faster_
- High abstraction level: _focues on functionalities and not in the code_
- Rich encapsulation: _makes secure and easy to maintain code_

### Look for disadvantages of this paradigm.
- Steep learning curve
- Larger program size
- Slower programs


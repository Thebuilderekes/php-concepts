When a parent class object is constructed using its constructor function, the nature of the object can be inherited by a child class or used to create to an object using the `new` keyword which expects that arguments provided will be of the expected nature of its parent class.

- We can only access a method from an intance of an object class 

- Private properties in a base class cannot be accessed from accessed from a child class but it can be access from a public method that can returns the property.

- Public properties can be access by the declaring class as well as the child class.

- Protected properties that intend to be passed on to child class cannot be accessed by the child class except through a public method declared from the parent class.

- Static properties can onnly be accesse within the class and not outside of the class using the ```self::``` before the property of method.

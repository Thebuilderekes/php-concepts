A type declaration is one that is used to safe guard a value's data type. As seesn in the ``$songs`` parameter being safe guarded with `Song`` type in the `playlist.php` file. this prevents the value from being of a different type during declarationand usage

- Public proprties can be accessed in the declaring calss and anywhere else.

- Private properties can only be acccessesd within the declaring class, they are not visible anywhere else. To access private prperty you will have to declare a public method from which you can access the private property. 


- When constructing a class object using a constructor function, whatever you define that object as is what will be passed on whenever you require that class into an external file using `require` or `require_once` keywords. 


 Read only varibles that are created within classes cannot be modified after object  creation

so in the case below, $username can only be assigned a value once, after which any attempt to reassign it to anothervalue will result in an error
```php
<?php
class User {
public readonly string $username

   function getUserName($userName){
       this->username = $username;

   }
}


$user = new User("Ekeopre")
```

- defined variables that have no value assigned have a default value of NULL


- A new subclass can be created to inherit the properties of a parne class by using the ```extend``` keyword

e.g
```php
<?php
class NewUser extends User {

}
````

Now `NewUser` will have access to all the non-private methods in `User`

`NewUser` sub clsee can now have it's own private methods or variable that is unique to it along side all inherited methods that are from the parent class ```User```

- Use ``$this`` keyword to call the methods of the parent class from methods in the child class.


## Key points about subclasses in PHP:

- A subclass can access public and protected properties and methods from its parent class.
- A subclass can override inherited methods from the parent class to provide its own implementation.
- Private methods from the parent class are not accessible to the subclass.
- A subclass can have its own properties and methods in addition to inherited ones



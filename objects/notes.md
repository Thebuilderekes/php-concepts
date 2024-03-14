 Read only varibles that are created within classe cannot be modified after object creation creation
so
```
class User {
public readonly string $username

   function getUserName($userName){
       this->username = $username;

   }
}


$user = new User("EKeopre")
```

so in the case above, $username can only be assigned a value once, after which any attempt to reassign it to anothervalue will result in an error

- A new subclass can be created to inherit the properties of a parne class by using the ```extend``` keyword

e.g
```
class NewUser extends User {

}
````

Now `NewUser` will have access to all the non-private methods in `User`


## Key points about subclasses in PHP:

- A subclass can access public and protected properties and methods from its parent class.
- A subclass can override inherited methods from the parent class to provide its own implementation.
- Private methods from the parent class are not accessible to the subclass.
- A subclass can have its own properties and methods in addition to inherited ones



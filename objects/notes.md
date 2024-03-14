 Read only varibles that are created within classe cannot be modified after object creation creation
so
```
class User {

   function getUserName(private readonly $userName){
       this->username = $username;

   }
}


$user = new User("EKeopre")
```

so in the case above, $username can only be assigned once as below, after which any attempt to reassign it will result inan error

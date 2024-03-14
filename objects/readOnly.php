<?php

/**
PHP 8.1 introduced the readonly class properties. The readonly properties allow you to define properties that can be only initialized once within the class.

To define a readonly property, you use the readonly keyword in a typed property

PHP only allows you to initialize the $username property from within the class itself, either from the constructor or a method.

*/

class User
{
    public readonly string $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }
}

$user = new User('joe');


echo "$user->username";

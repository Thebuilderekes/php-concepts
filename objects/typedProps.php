<?php
//If you don’t want the behavior of not allowing anytthing other than the types matching the type declared, you can disable it by declaring strict_types at the beginning of the file as follows:
 require 'readOnly.php';

declare(strict_types=1);

class BankAccount
{
    public float $balance = 0;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}


$account = new BankAccount(100.25); // error becauuse it is not of the declared type
var_dump($account->balance);

echo $user;

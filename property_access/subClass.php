 <?php
 require 'baseClass.php';

$customer1AccountBalance = new Wallet();

$customer1AccountBalance->setBalance(80000) . PHP_EOL;

$customer1AccountBalance->deposit(2000);

$customer1AccountBalance->withdraw(54000);


echo "get balance " .  $customer1AccountBalance->getBalance() . PHP_EOL;


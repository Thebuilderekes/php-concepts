 <?php
 require_once 'baseClass.php';

$customer1AccountBalance = new checkWallet();

echo $customer1AccountBalance->getBalance(80000);



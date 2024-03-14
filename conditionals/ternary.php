<?php

$age = false;

$developerAge = $age == false  ? "this is not true" : "this is true"; 

echo "$developerAge \n";


//for default values
//is age true? let age be 40 if true else 33 if false;
$personAge =  $age ? 40 :  33;

echo "$personAge \n"; // output 33


//php treats 0 as false

$costOfMacBook = 0;

$walletAmount = $costOfMacBook ? 1000 : 25;

echo $walletAmount;

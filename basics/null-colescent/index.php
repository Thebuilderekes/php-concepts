<?php

// Example 1:
$name = $username ?? "Guest";
echo $name; // If $username is null, it will print "Guest"


// Example 2:
// $costOfMacBook = 0;

//so because the $costOfMacBook has been commented out, it is assumed to be null and so $walletAmount defaults to 1000;

$walletAmount = $costOfMacBook ?? 1000;

echo $walletAmount;


// Example 3: Accessing array elements with a default value
$array = ["a" => 1, "b" => 2];
$value = $array["c"] ?? "Not found";
echo $value; // Since "c" key doesn't exist in $array, it will print "Not found"


/*php has a isset method to check if a variable exists */




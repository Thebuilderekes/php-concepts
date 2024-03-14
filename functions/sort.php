<?php
$ages = array("Peter" => 32, "John" => 28, "Doe" => 45);
asort($ages);
// asort is used to sort associative arrays
foreach ($ages as $key => $value) {
    echo "$key = $value " . '<br>';
}

$originalArray = array(4, 2, 8, 6);
$sortedArray = $originalArray; // Copy the original array

sort($sortedArray); // Sort the copy

// Print the original and sorted arrays
print_r($originalArray) . '<br>';
print_r($sortedArray);

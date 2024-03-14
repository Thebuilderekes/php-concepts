<?php
$x = 5; // global scope

  $newline = "\n";
function myTest() {

  $x = "inside function";
  $newline = "\n";
  // using x inside this function will generate an error
  echo "Variable x inside function is: $x $newline ";
}
myTest();

echo "<p>Variable x outside function is: $x</p> $newline";

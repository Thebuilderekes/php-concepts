<?php
$x = 5;
$y = 10;

function myTest() {
  global $x;
  $y = $x + 567;
  echo $y . '<br>';
}

myTest();
echo $y; // 

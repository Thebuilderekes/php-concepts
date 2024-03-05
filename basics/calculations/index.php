<?php
$a = 3;
$b = 5;

//echo "$b" . PHP_EOL;
//print $a . PHP_EOL;
//if the increment operator is before it increment happens before the calculation
//if the increment operator is after it increment happens before the calculation

$a = ++$b + 4;  // Store original value of $b in $a

//note that the value b has now been increase through out the program, because of ++b 
//so b = 6

print $a . PHP_EOL;
echo "$b" . PHP_EOL;

echo "temp ===============" . PHP_EOL;

$a = 5;
$temp = $a;
$b = ++$temp;
// only by using ++$temp will `b` take on the incremented value of `$temp` which was a = 5 but now is 6

echo "a: $a, b: $b" . PHP_EOL; 
echo "$temp" . PHP_EOL; 

echo "after calc======" . PHP_EOL;

$x = 2;
$y = 3;

$z = $x++ + 2;

echo "z : $z" . PHP_EOL;
echo "x : $x" . PHP_EOL;

//if the increment operator is before it increment happens before the calculation
//if the increment operator is after it increment happens before the calculation




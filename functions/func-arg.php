<?php

$numberInput = 2 ;

// function doubleNumber($input){
//     $input *=2;
//   echo "$input";
// 
// }



// you can variables can be passed by refernce using & before the parameter name which mutates the original value
// you cannot pass a plain number or a plain string as an argument when passing by reference. example below

function doubleNumber(&$numberInput){
    $numberInput *= 2;
  echo "$numberInput" . PHP_EOL;

}
// The value of $numberInput is modified because it is being passed by reference

doubleNumber($numberInput);
echo "$numberInput" . PHP_EOL;



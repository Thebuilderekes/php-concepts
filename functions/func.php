<?php
$items = [
  1,
  2,
  3,
  4,
  5
];


$makefoo = true;

/* We can't call foo() from here 
   since it doesn't exist yet,
   but we can call bar() */


bar();

function bar()
{
  echo "I exist immediately upon program start.\n";
}


foo();

function foo()
{
  echo "I don't exist until program execution reaches me.\n";
}

function takes_array($input)
{
  echo "$input[0] + $input[1] = ", $input[0] + $input[1]  . PHP_EOL;
}

takes_array($items);




/*

In PHP, when you pass a variable to a function, you can either pass it by value or by reference. By default, PHP passes variables by value, which means a copy of the variable's value is passed to the function. However, you can explicitly pass variables by reference by using the & symbol in the function declaration.

In the code provided, the parameter $string of the function add_some_extra() is declared with &, indicating that it's passed by reference. This means that when you pass $str to add_some_extra(), you're not passing a copy of $str, but rather a reference to the original variable $str.

So, any changes made to $string within the function directly affect the original variable $str because they're essentially the same variable. This is why modifying $string inside the function also modifies $str outside the function.

example of this in the next code 
*/

function add_some_extra(&$string)
{
  // $string .= 'and something extra.';
  $string = $string . 'add something extra.';
  // $str = $str . 'add something extra.';
}
$str = 'This is a string, ';
add_some_extra($str);
echo $str  . PHP_EOL;



echo "====usong global keyword to access global variable===="  . PHP_EOL;
echo "" . PHP_EOL;

function printName()
{

  global $developerName;
  echo "this is the developer name:  $developerName"  . PHP_EOL;
  echo "" . PHP_EOL;
}

$developerName = "Ekeopre";

printName();


echo "====default argument values===="  . PHP_EOL;
echo "" . PHP_EOL;

function makecoffee($type = "cappuccino")
{
  return "Making a cup of $type.\n";
}
echo makecoffee();
echo makecoffee(null);
echo makecoffee("espresso");

/*
default arguments can also be arrays, objects etc
*/


function takeName($course){

  echo gettype($course);
  

}

takeName("php");


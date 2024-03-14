<?php

class Developer {
  public $name;
  public $age;
  public $profession;


  public function greet($greeting, $name){

         return "$greeting my name is $name";
  }
}


$ekeopre = new Developer();

$ekeopre->name = "Ekeopre";
$ekeopre->age = 33;
$ekeopre->profession = "PHP Developer";
echo $ekeopre->greet("hello", "ekeopre") . PHP_EOL;
echo "$ekeopre->age". PHP_EOL;




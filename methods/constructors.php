<?php

// When you create an instance of an object, you pass properties to this newly created object with the help
// of constructor 

class Product
{
  public $productName;
  public $productPrice;
  public $currency = "$";
  
  // constructor method

// Without having to list the public variables as done above, all the public variables can be passed as arguments in the constructor directly all in one step from PHP 8 whithou 
  public function __construct($productName = "watch", $productPrice = 2000){

    $this->productName = $productName;
    $this->productPrice = $productPrice;

  }

}

$watch = new Product(productPrice: 7000, productName: "silver watch");

var_dump($watch);



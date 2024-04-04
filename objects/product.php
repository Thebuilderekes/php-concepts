<?php

class Product
{
  public $price;
  public $currency = "$";
function productPrice($price){
    return $price;
  }

  function productMessage($price){

    echo "the price of the product is $" . "{$price}" . PHP_EOL;
  }


  // you can set only a variable and it will be given a default value of null
}



$watch = new Product();
echo $watch->productPrice(5000) . PHP_EOL;

$watch->productMessage(8000);

$watch->productPrice(5000) . PHP_EOL;



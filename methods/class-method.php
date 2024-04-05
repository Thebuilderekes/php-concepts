 <?php
 class Product
 {
     function productPrice($price, $tax_multiplier = 0.3, $currency= "$")
    {
     
         $price *= $tax_multiplier;
         return $currency . $price;
    }
     // mehtod
     function productMessage($price)
     {
         echo "the price of the product is $" . "{$price}" . PHP_EOL;
     }
 }
 $macBook = new Product();

 $macBookPrice = $macBook->productPrice(9000) . PHP_EOL;

 echo $macBookPrice;

 // you can use currency: "#' as an argument of productPrice if you want to change the currency symbol from $ to #.
 //  Notice the colon and not =. This is a PHP 8 or higher feature 
 

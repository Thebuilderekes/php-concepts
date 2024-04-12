<?php
require_once "digitalBook.php";
require_once "physicalBook.php";

$physicalBook = new PhysicalBook('lets do php', 'Ekeopre Beredugo', 3000, 2000);
$digitalBook = new DigitalBook('The php king', 'dr php', 1000, 2000);


echo $physicalBook->author .PHP_EOL;

echo $digitalBook->getBookDetails();

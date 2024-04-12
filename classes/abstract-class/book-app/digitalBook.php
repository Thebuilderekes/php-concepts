<?php
require_once 'book.php';


class DigitalBook extends Book
{

  public int $filesize;

  public function __construct(string $title, string $author, int $price, int $filesize){

   // using the parent keyword this way as seen below allows you satisfy the position of the other properties in the constructor above that are broader in the context of the parent Book class constructor properties. This is a must whenever we use properties in child classes.
    parent::__construct($title, $author, $price);
    $this->filesize = $filesize;
  }

  public function getFilesize(): int {

    return $this->filesize;
  }
  public function getBookDetails() {

    return "<p>title: {$this->title}</p> <p>price: {$this->price}<p>author: {$this->author}</p><p>filesize: {$this->filesize} </p>";
  }
}

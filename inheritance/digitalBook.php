

<?php
require_once 'book.php';


class DigitalBook extends Book
{

  public int $filesize;

  public function __construct(string $title, string $author, int $price, int $filesize){


    parent::__construct($title, $author, $price);
    $this->filesize = $filesize;
  }

  public function getFilesize(): int {

    return $this->filesize;
  }

}

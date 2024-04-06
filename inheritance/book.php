<?php

class Book
{


  public function __construct(
    public string $title, public string $author, public string $price, public string $weight, public string $filesize
  )
  {
    $this->title = $title;
    $this->author = $author;
    $this->price = $price;

  }


  public function getTitle(): string {

    return $this->title;
  }

  public function getAuthor(): string {

    return $this->author;
  }


  public function getPrice(): int {

    return $this->price;
  }

  public function getWeight(): int {

    return $this->weight;
  }

  public function getfilesize(): int {

    return $this->filesize;
  }
}

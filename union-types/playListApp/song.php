<?php
class Song 

{

  public string $song_name;
  public int $number_of_plays;
  public int|float $rating;
  public function __construct($song_name, $number_of_plays, $rating)
  {
    $this->song_name = $song_name;
    $this->number_of_plays = $number_of_plays;
    $this->rating = $rating;
  }



}

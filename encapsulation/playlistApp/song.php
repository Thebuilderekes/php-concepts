<?php
class Song 

{

  public $song_name;
  public $number_of_plays;

  public function __construct(string $song_name, int $number_of_plays)
  {
    $this->song_name = $song_name;
    $this->number_of_plays = $number_of_plays;
  }



}

<?php

class Song
{

//class Song is defined as a class object that holds 2 properties. The song_name and the number_of_plays property. 
  public $song_name;

  public $number_of_plays;

  public function __construct( string $song_name, int $number_of_plays){
  /**
   * @param string $song_name
   * @param int $number_of_plays 
   * This comment is just an idicator of the types of properties involved*/
    $this->song_name = $song_name;
     $this->number_of_plays = $number_of_plays;   
  }

}



<?php
class Song
{
    public string $song_name;
    public int $number_of_plays;
    public int|float $rating;

    public function __construct($song_name, $number_of_plays)
    {
        $this->song_name = $song_name;
        $this->number_of_plays = $number_of_plays;


  }


  public function setRating(int|float $rating){

        if ($rating < 0) {
            $rating = 0;
        } elseif ($rating > 5) {
            $rating = 5;
    }
    $this->rating = $rating;
  }
}

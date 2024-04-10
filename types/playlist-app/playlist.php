 <?php
// class type-declaration
 class PlayList 

 {

   public $songs = [];

   // $song is given a a type of Song to take up the nature of the Song class, meaning that it is 
   // ex pected to be an object that has 2 propeties, song_name and number_of_plays.
   public function addSong(Song $song){

     $this->songs[]= $song;

   }

   // return type declarations. 
   // The int tag below signifies that this getSongsLength method 
   // should return an integer
   public function getSongsLength(): int
   {
     return count($this->songs);
   }
 } 


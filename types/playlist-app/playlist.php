 <?php


// class type-declaration

 class PlayList 

 {

   public $songs = [];

   public function addSong(Song $song){

     $this->songs[]= $song;

   }

   // return type declarations. The int tag below signifies that this function should return an integer
   public function getSongsLength(): int
   {
     return count($this->songs);
   }
 } 


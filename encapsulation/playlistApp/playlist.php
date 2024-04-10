<?php
require "song.php";

class PlayList
{
 public $songList = [];
  
  public function addSong(Song $song){

    $this->songList[] = $song;
  }
   


}

<?php

require 'song.php';
require 'playlist.php';


$playlist = new PlayList();

$song1 = new Song('get shorty', 1000);
$song2 = new Song('long time', 500);


$playlist->addSong($song1);
$playlist->addSong($song2);


foreach($playlist->songs as $song){
     

  echo $song->song_name . PHP_EOL;
};


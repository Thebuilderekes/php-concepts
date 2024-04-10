<?php
require_once "playlist.php";
require_once "song.php";

$jacksonPlayList = new PlayList();

$song1 = new Song("hello", 1000);

$jacksonPlayList->addSong($song1);
var_dump($song1);
echo "==============";

var_dump($jacksonPlayList);


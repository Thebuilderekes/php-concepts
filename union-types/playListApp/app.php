<?php
require_once "playlist.php";
require_once "song.php";

$jacksonPlayList = new PlayList();

$song1 = new Song("hello", 1000  );
$song1->setRating(3);

$jacksonPlayList->addSong($song1);
var_dump($song1) . PHP_EOL;
echo "==============" . PHP_EOL;

var_dump($jacksonPlayList);


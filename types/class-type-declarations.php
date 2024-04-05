<?php


require_once 'song.php';
require_once 'playlist.php';


$playlist = new PlayList();

$song1 = new song('get shorty', 1000);
$song2 = new song('long time', 1000);


$playlist->addSong($song1);
$playlist->addSong($song2);


var_dump($playlist);


<?php

// bootstrapping
// = requiring everything that we need
//   for the application to run
require_once 'AudioTrack.php';
require_once 'Song.php';



$audioTrack = new AudioTrack('Imagine');

var_dump($audioTrack);

function play(AudioTrack $track)
{

}

$song = new Song;

play($audioTrack);
play($song);

$song->getAuthor();
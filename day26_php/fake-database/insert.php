<?php

require_once 'DBBlackbox.php';
require_once '../01_OOP/AudioTrack.php';


$audioTrack = new AudioTrack;
$audioTrack->name = 'Imagine';
$audioTrack->author_name = 'John Lennon';


$id = insert($audioTrack);

var_dump($id);
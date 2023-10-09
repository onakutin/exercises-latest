<?php

require_once 'DBBlackbox.php';
require_once '../01_OOP/AudioTrack.php';

$track = find(1, 'AudioTrack');

$track->length = 183;
$track->year_of_release = 1971;
$track->album_name = 'Imagine';

update(1, $track);
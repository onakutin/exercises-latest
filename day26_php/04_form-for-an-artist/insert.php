<?php

require_once 'DBBlackbox.php';
require_once 'Artist.php';

$artist = new Artist;

$artist->getDetails();

// $id = insert($artist);

$artist->save();
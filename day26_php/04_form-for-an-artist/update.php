<?php

require_once 'DBBlackbox.php';
require_once 'Artist.php';

$id = $_GET['id'];

$artist = find($id, 'Artist');

$artist->getDetails();

// $id = update($id, $artist);

$artist->save();
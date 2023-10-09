<?php

require_once 'DBBlackbox.php';
require_once 'Song.php';

// prepare empty entity
$song = new Song;

// update entity from request

$song->name = $_POST['name'] ?? $song->name; // if 'name' was not found in $_POST data, keep the current value
$song->author = $_POST['author'] ?? $song->author;
$song->length = intval($_POST['length'] ?? $song->length);
$song->album = $_POST['album'] ?? $song->album;

$id = insert($song);
<?php

require_once 'bootstrap.php';

session();

$id = $_GET['id'] ?? null;

if ($id) {
    $song = find($id, 'Song');
} else {
    $song = new Song;
}

$song->name = $_POST['name'] ?? $song->name;
$song->author = $_POST['author'] ?? $song->author;
$song->length = $_POST['length'] ?? $song->length;
$song->album = $_POST['album'] ?? $song->album;

if ($id) {
    update($id, $song);
} else {
    $id = insert($song);
}

$_SESSION['success_message'] = 'Saving successful';

header('Location: edit.php?id=' . $id);
exit();
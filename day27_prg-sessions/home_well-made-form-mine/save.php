<?php

require_once 'bootstrap.php';

session();

$id = $_GET['id'] ?? null;


$valid = true;
$errors = [];

if (empty($_POST['name'])) {
    $valid = false;
    $errors[] = 'Cannot save a song without its name';
}
if (!is_numeric($_POST['length'])) {
    $valid = false;
    $errors[] = '"Length" must be a number';
}

if ($valid === false) {
    session()->flash('errors', $errors);
    session()->flashRequest();
    header('Location: edit.php?id=' . $id);
    exit();
}


if ($id) {
    $song = find($id, 'Song');
} else {
    $song = new Song;
}

$song->name = $_POST['name'] ?? $song->name;
$song->author = $_POST['author'] ?? $song->author;
$song->length = $_POST['length'] ?? $song->length;
$song->album = $_POST['album'] ?? $song->album;


$_SESSION['success_message'] = 'Saving successful';

header('Location: edit.php?id=' . $id);
exit();
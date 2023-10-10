<?php

require_once 'bootstrap.php';


// validation
$valid = true;
$errors = [];

if (empty($_POST['name'])) {
    $valid = false;
    $errors[] = 'Name is a required field.';
}

if (!is_numeric($_POST['length'])) {
    $valid = false;
    $errors[] = 'Length must be a number.';
}

if ($valid === false) {

    session()->flash('errors', $errors);
    session()->flashRequest();
    header('Location: create.php');
    exit();
}


// prepare empty entity
$song = new Song;

// update entity from request
$song->name = $_POST['name'] ?? $song->name; // if 'name' was not found in $_POST data, keep the current value
$song->author = $_POST['author'] ?? $song->author;
$song->length = intval($_POST['length'] ?? $song->length);
$song->album = $_POST['album'] ?? $song->album;

// yes change:
// $song->album    = $_POST['album'];

// no change:
// $song->album    = $song->album;

// somehow insert the entity into the database and generate a unique ID
// here done using DBBlackbox
$id = insert($song);

// $song->save();

session()->flash('success_message', 'Song was successfully saved.');

//                edit.php?id=5
header('Location: edit.php?id=' . $id);

exit();
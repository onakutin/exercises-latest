<?php

require_once 'bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    session()->flash('errors', ['You cannot access update.php with GET']);
    header('Location: list.php');
    exit();
}

// find the ID of the record we want to edit in the request
// OR NOT - if we are creating a new record
$id = $_GET['id'] ?? null;

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
    header('Location: edit.php?id=' . $id);
    exit();
}

// somehow we must determine whether this is creating a new record
// or updating an existing one. The presence of `id=` in the URL
// is a good indicator
if ($id) {
    // somehow retrieve existing data from some storage
    $song = find($id, 'Song');
} else {
    // prepare empty entity
    $song = new Song;
}

// update entity from request
$song->name = $_POST['name'] ?? $song->name; // if 'name' was not found in $_POST data, keep the current value
$song->author = $_POST['author'] ?? $song->author;
$song->length = intval($_POST['length'] ?? $song->length);
$song->album = $_POST['album'] ?? $song->album;

// somehow save the data into the database (using the unique ID)
// update($id, $song);
$song->save();

// for the next request (for edit.php)
session()->flash('success_message', 'Song was successfully saved.');

// in this request, success_message is not yet in the session
$success_message = session()->get('success_message'); // null

// redirect to edit.php
header('Location: edit.php?id=' . $id);

exit();
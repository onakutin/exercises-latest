<?php

require_once 'bootstrap.php';


// find the ID of the record we want to edit in the request
$id = $_GET['id'];

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

// somehow retrieve existing data from some storage
$song = find($id, 'Song');

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
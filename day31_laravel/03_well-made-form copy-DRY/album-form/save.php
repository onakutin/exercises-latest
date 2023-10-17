<?php

require_once 'bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    session()->flash('errors', ['You cannot access edit.php with GET']);
    header('Location: list.php');
    exit();
}

$id = $_GET['id'] ?? null;

$valid = true;
$errors = [];

if (empty($_POST['name'])) {
    $valid = false;
    $errors[] = 'Name is a required field.';
}

if (!is_numeric($_POST['year'])) {
    $valid = false;
    $errors[] = 'Year must be a number.';
}

if ($valid === false) {

    session()->flash('errors', $errors);
    session()->flashRequest();
    header('Location: edit.php?id=' . $id);
    exit();
}

if ($id) {
    $album = find($id, 'Album');
} else {
    $album = new Album;
}

$album->name = $_POST['name'] ?? $album->name;
$album->author = $_POST['author'] ?? $album->author;
$album->year = intval($_POST['year'] ?? $album->year);

$album->save();

session()->flash('success_message', 'Album was successfully saved.');

$success_message = session()->get('success_message');

header('Location: edit.php?id=' . $id);

exit();
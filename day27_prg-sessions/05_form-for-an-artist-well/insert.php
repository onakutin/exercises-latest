<?php

session_start();

require_once 'DBBlackbox.php';
require_once 'Artist.php';

$artist = new Artist;

$valid = true;
$errors = [];

if (empty($_POST['name'])) {
    $valid = false;
    $errors[] = 'Name is a required field';
}

if (empty($_POST['birthYear'])) {
    $valid = false;
    $errors[] = 'The year of birth must be a year';
}

if ($valid === false) {
    $_SESSION['errors'] = $errors;
    $_SESSION['request_data'] = $_POST;
    header('Location: create.php');
    exit();
}

$artist->getDetails();

$id = insert($artist);




header('Location: edit.php?id=' . $id);
exit();
<?php

session_start();

require_once 'DBBlackbox.php';
require_once 'Artist.php';

$id = $_GET['id'];

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
    header('Location: edit.php?id=' . $id);
    exit();

}

$artist = find($id, 'Artist');

$artist->getDetails();

update($id, $artist);



$_SESSION["success_message"] = 'Saving successful';

header('Location: edit.php?id=' . $id);
exit();
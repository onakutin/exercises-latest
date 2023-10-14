<?php

require_once 'bootstrap.php';

$id = $_GET['id'] ?? null;



$valid = true;
$errors = [];

if (empty($_POST['name'])) {
    $valid = false;
    $errors[] = 'Name is a required field';
}
if (empty($_POST['district'])) {
    $valid = false;
    $errors[] = 'District is a required field';
}
if (empty($_POST['country_id'])) {
    $valid = false;
    $errors[] = 'Country id is a required field';
}
if (empty($_POST['population'])) {
    $valid = false;
    $errors[] = 'Population is a required field';
} elseif (!is_numeric($_POST['population'])) {
    $valid = false;
    $errors[] = 'Population must be a number';
}



if (!$valid) {
    session()->flash('errors', $errors);
    if ($id) {
        header('Location: edit.php?id=' . $id);

    } else {
        header("Location: edit.php");
    }
    session()->flashRequest();
    exit();
}




if (!$id) {
    $city = new City;
} else {
    $city = DB::selectOne('
    SELECT *
    FROM `cities`
    WHERE `id` = ?
    ',
        [$id],
        'City'
    );
}

$city->name = $_POST['name'];
$city->district = $_POST['district'];
$city->country_id = $_POST['country_id'];
$city->population = $_POST['population'];


if (!$id) {
    DB::insert('
    INSERT
    INTO `cities`
    (`name`, `country_id`, `district`, `population`)
    VALUES
    (?,?,?,?)',
        [$city->name, $city->country_id, $city->district, $city->population]
    );
    $id = DB::getPdo()->lastInsertId();
} else {
    DB::update('
    UPDATE `cities`
    SET `name` = ?,
    `country_id` = ?,
    `district` = ?,
    `population` = ?
    ', [$city->name, $city->country_id, $city->district, $city->population]);
}

session()->flash('success_message', 'The record was successfully saved');

header('Location: edit.php?id=' . $id);
exit();
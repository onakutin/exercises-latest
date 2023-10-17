<?php

require_once '../lib/bootstrap.php';

$id = $_GET['id'] ?? null;

if ($id) {
    $country = DB::selectOne('
    SELECT *
    FROM `countries`
    WHERE `id` = ?
    ', [$id], 'Country');
} else {
    $country = new Country;
}

// var_dump($country);
// die();

$labels = [];
foreach ($country as $key => $detail) {
    if ($key !== 'id') {
        $labels[] = $key;
    }
}

foreach ($labels as $label) {
    $country->$label = $_POST[$label] ?? null;
}


$errors = [];

if (empty($_POST['code'])) {
    $errors[] = 'Code is a required field';
}
if (empty($_POST['name'])) {
    $errors[] = 'Name is a required field';
}
if (!is_numeric($_POST['surface_area'])) {
    $errors[] = 'Surface area must be a number';
}
if (!is_numeric($_POST['population'])) {
    $errors[] = 'Population must be a number';
}
if (!is_numeric($_POST['gnp'])) {
    $errors[] = 'GNP must be a number';
}
if (!is_numeric($_POST['capital_city_id'])) {
    $errors[] = 'Capital city id must be a number';
}
if (!is_numeric($_POST['continent_id'])) {
    $errors[] = 'Continent id must be a number';
}


if ($errors) {

    session()->flash('error_messages', $errors);
    if ($id) {
        header('Location: edit.php?id=' . $id);
    } else {
        header('Location: edit.php');
    }
    session()->flashRequest();
    exit();
}



if ($id) {
    DB::update('
    UPDATE `countries`
    SET `code` = ?, `code_alpha2` = ?, `name` = ?, `continent` = ?, `continent_id` = ?, `region` = ?, `surface_area` = ?, `population` = ?, `gnp` = ?, `head_of_state` = ?, `capital_city_id` = ?
    WHERE `id` = ?',
        [$country->code, $country->code_alpha2, $country->name, $country->continent, $country->continent_id, $country->region, $country->surface_area, $country->population, $country->gnp, $country->head_of_state, $country->capital_city_id, $id]
    );
} else {
    DB::insert('
    INSERT
    INTO `countries`
    (`code`, `code_alpha2`, `name`, `continent`, `continent_id`, `region`, `surface_area`, `population`, `gnp`, `head_of_state`, `capital_city_id`)
    VALUES
    (?,?,?,?,?,?,?,?,?,?,?)',
        [$country->code, $country->code_alpha2, $country->name, $country->continent, $country->continent_id, $country->region, $country->surface_area, $country->population, $country->gnp, $country->head_of_state, $country->capital_city_id]
    );
    $id = DB::getPdo()->lastInsertId();
}

session()->flash('success_message', 'Successfully saved');

header('Location: edit.php?id=' . $id);
exit();
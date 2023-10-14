<?php

require_once "DB.php";
require_once "DB_functions.php";

require_once "City.php";

$success = DB::connect('localhost', 'world', 'root', '');

// the data about the city being built is in $_POST
$city_data = $_POST;


// modify the class City so it can be used with the DB library
$city = new City();

$city->name = $_POST['name'];
$city->district = $_POST['district'];
$city->country_id = $_POST['country_id'];
$city->population = $_POST['population'];

// make sure the $city has the property it needs to have

$city->insert();

header('Location: index.php');
exit();
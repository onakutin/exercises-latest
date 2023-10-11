<?php

require_once 'DB.php';
require_once 'DB_functions.php';
require_once 'Country.php';


DB::connect(
    'localhost',
    // location of server
    'world',
    // database
    'root',
    // username
    '' // password
);

$results = DB::select(
    'SELECT * FROM `countries` WHERE `population` > ?',
    [
        20000000
    ],
    'Country'
);

$czechia = DB::selectOne(
    'SELECT *
    FROM `countries`
    WHERE `name` = ?
    LIMIT 1',
    [
        'Czech Republic'
    ],
    'Country'
);

// $some_city = $czechia->getCapital();

// var_dump($some_city);

// var_dump($czechia);

// $czechia->head_of_state = 'Petr Pavel';
// $czechia->save();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ul>
        <?php foreach ($results as $country): ?>
            <li>
                <?= $country->name ?> (pop.
                <?= $country->population ?>)
                <br>
                capital:
                <?= $country->getCapital()->name ?>
                <br>
                <?= $country->continent ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>
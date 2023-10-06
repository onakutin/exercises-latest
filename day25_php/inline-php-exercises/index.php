<?php

$title = 'Inline PHP practice';

$vehicles = [
    'Bicycle' => 50,
    'Car' => 150,
    'Train' => 110
];

$messages = [

    'Preparing to do some stuff...',

    'Doing amazing stuff...',

    'Stuff is done.'

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <h1><?= $title ?></h1>
    
    
    <table>
        <tr>
            <th>Means of transport</th>
            <th>Max. speed (km/h)</th>
            <tr>
                <?php foreach($vehicles as $vehicle => $speed) : ?>
                    <tr>
                        <td><?= $vehicle ?></td>
                        <td><?= $speed ?></td>
                    </tr>
                <?php endforeach; ?>
    </table>

    <?php if($messages) : ?>

        <ul class="messages" style="padding: 1em; border: 1px solid black; margin: 1em;">

            <?php foreach($messages as $message) : ?>
                <li><?= $message ?></li>
            <?php endforeach; ?>
    
        </ul>

    <?php endif ?>

</body>
</html>
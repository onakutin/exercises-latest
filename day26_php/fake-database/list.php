<?php

require_once 'DBBlackbox.php';
require_once '../01_OOP/AudioTrack.php';

$audioTrack = select(null, null, 'AudioTrack');

var_dump($audioTrack);

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
        <?php foreach ($audioTrack as $track): ?>
            <li>
                <?= $track->name ?>
                by
                <?= $track->author_name ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>
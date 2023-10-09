<?php

require_once 'DBBlackbox.php';
require_once 'Artist.php';

$id = $_GET['id'];

$artist = find($id, 'Artist');

var_dump($artist);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="update.php?id=<?= $id ?>" method="post">

        <!-- display the form prefilled with entity data -->

        <?php $artist->renderForm() ?>

    </form>
</body>

</html>
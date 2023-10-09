<?php

require_once 'Artist.php';

$artist = new Artist;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insert.php" method="post">

        <!-- display the form prefilled with entity data -->

        <?php $artist->renderForm() ?>

    </form>
</body>

</html>
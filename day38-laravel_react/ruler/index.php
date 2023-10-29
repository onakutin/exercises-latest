<?php

$size = isset($_GET['size']) && $_GET['size'] !== '' ? $_GET['size'] : 2;
$cmLength = isset($_GET['cmLength']) && $_GET['cmLength'] !== '' ? $_GET['cmLength'] : 40;
$sections = isset($_GET['sections']) && $_GET['sections'] !== '' ? $_GET['sections'] : 10;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruler</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h1>
        ruler
    </h1>

    <form action="" method="get">
        Ruler size (mm):
        <br>
        <input type="number" name="size">
        <br>
        Length of cm (px):
        <br>
        <input type="number" name="cmLength">
        <br>
        Number of sections in cm:
        <br>
        <input type="number" name="sections">
        <br>
        <button type="submit">Submit</button>
    </form>
    <br>

    <div class="ruler">
        <?php for ($i = 0; $i < ($size * $sections + 1); $i++) : ?>
            <?php if ($i % $sections == 0) : ?>
                <div class="section section--cm" style="width: <?= $cmLength ?>px">
                    <div class=" section__number"><?= $i / $sections ?></div>
                </div>


            <?php elseif ((($sections % 2) == 0) && (($i % ($sections / 2)) == 0)) : ?>
                <div class="section section--middle" style="width: <?= $cmLength ?>px"></div>
            <?php else : ?>
                <div class="section" style="width: <?= $cmLength ?>px"></div>
            <?php endif ?>
        <?php endfor; ?>
    </div>
</body>

</html>
<?php

require_once 'bootstrap.php';

$albums = select(10, 0, 'Album');

?>

<a href="edit.php">Add new album</a>

<ul>
    <?php foreach ($albums as $album): ?>
        <li>
            <?= $album->name ?>

            <a href="edit.php?id=<?= $album->id ?>">EDIT</a>
        </li>
    <?php endforeach; ?>
</ul>
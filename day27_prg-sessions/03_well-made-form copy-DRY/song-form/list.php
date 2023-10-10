<?php

require_once 'bootstrap.php';

$songs = select(10, 0, 'Song');

?>

<a href="edit.php">Add new song</a>

<ul>
    <?php foreach ($songs as $song): ?>
        <li>
            <?= $song->name ?>

            <a href="edit.php?id=<?= $song->id ?>">EDIT</a>
        </li>
    <?php endforeach; ?>
</ul>
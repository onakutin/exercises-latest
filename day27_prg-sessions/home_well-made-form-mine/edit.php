<?php

require_once 'bootstrap.php';

session();

$id = $_GET['id'] ?? null;

if ($id) {
    $song = find($id, 'Song');
} else {
    $song = new Song;
}

if (isset($_SESSION['success_message'])) {
    $success_message = $_SESSION['success_message'];
    unset($_SESSION['success_message']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Song</title>
    <style>
        .success-message {
            background-color: lightgreen;
            color: darkgreen;
        }
    </style>
</head>

<body>
    <?php if ($id): ?>
        <h1>Edit this song</h1>
    <?php else: ?>
        <h1>Create a song</h1>
    <?php endif; ?>


    <a href="list.php">List</a>

    <?php if ($id): ?>
        <a href="edit.php">Insert new</a>
    <?php endif; ?>

    <?php if (!empty($success_message)): ?>
        <div class="success-message">
            <?= $success_message ?>
        </div>
    <?php endif; ?>

    <?php if ($id): ?>
        <form action="save.php?id=<?= $id ?>" method="post">
        <?php else: ?>
            <form action="save.php" method="post">
            <?php endif; ?>

            Name:<br>
            <input type="text" name="name" value="<?= htmlspecialchars((string) $song->name) ?>"><br>
            <br>

            Author:<br>
            <input type="text" name="author" value="<?= htmlspecialchars((string) $song->author) ?>"><br>
            <br>

            Length:<br>
            <input type="text" name="length" value="<?= htmlspecialchars((string) $song->length) ?>"><br>
            <br>

            Album:<br>
            <input type="text" name="album" value="<?= htmlspecialchars((string) $song->album) ?>"><br>
            <br>

            <button type="submit">SAVE</button>

        </form>
</body>

</html>
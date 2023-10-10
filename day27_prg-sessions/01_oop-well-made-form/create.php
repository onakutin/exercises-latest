<?php

require_once 'bootstrap.php';

// prepare an empty entity
$song = new Song;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Create a new song</h1>

    <a href="list.php">Back to list</a>

    <?php include 'alerts.php'; ?>

    <form action="insert.php" method="post">

        <!-- display the form prefilled with entity data -->

        Name:<br>
        <input type="text" name="name" value="<?= htmlspecialchars((string) old('name', $song->name)) ?>"><br>
        <br>

        Author:<br>
        <input type="text" name="author" value="<?= htmlspecialchars((string) old('author', $song->author)) ?>"><br>
        <br>

        Length:<br>
        <input type="text" name="length" value="<?= htmlspecialchars((string) old('length', $song->length)) ?>">
        seconds<br>
        <br>

        Album:<br>
        <input type="text" name="album" value="<?= htmlspecialchars((string) old('album', $song->album)) ?>"
            placeholder="Please fill in the album"><br>
        <br>

        <button type="submit">Save</button>

    </form>
</body>

</html>
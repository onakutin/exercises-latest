<?php

require_once 'bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    session()->flash('errors', ['You cannot access edit.php with GET']);
    header('Location: list.php');
    exit();
}

// find the ID of the record we want to edit in the request
// OR NOT - if we are creating a new record
$id = $_GET['id'] ?? null;

// somehow we must determine whether this is creating a new record
// or updating an existing one. The presence of `id=` in the URL
// is a good indicator
if ($id) {
    // somehow retrieve existing data from some storage
    $song = find($id, 'Song');
} else {
    // prepare an empty entity
    $song = new Song;
}

// start the session so that we can work with $_SESSION
// session_start(); // done automatically now when calling session() for the first time

// take the value of success_message from the session if it is there
$success_message = session()->get('success_message', null);

$errors = session()->get('errors', []);

// delete the success_message from the session == "flashing"
// unset($_SESSION['success_message']);

// here the message is in the variable, but not anymore in the session

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Add / edit a song</h1>

    <a href="list.php">Back to list</a>

    <?php include '../alerts.php'; ?>

    <?php if ($id): ?>
        <form action="save.php?id=<?= $id ?>" method="post">
        <?php else: ?>
            <form action="save.php" method="post">
            <?php endif; ?>

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
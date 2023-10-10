<?php

require_once 'bootstrap.php';

// find the ID of the record we want to edit in the request
$id = $_GET['id'];

// somehow retrieve existing song from some storage
$song = find($id, 'Song');

// start the session so that we can work with $_SESSION
// session_start(); // done automatically now when calling session() for the first time

// take the value of success_message from the session if it is there
$success_message = session()->get('success_message', null);

$errors = session()->get('errors', []);

// delete the success_message from the session == "flashing"
// unset($_SESSION['success_message']);

// here the message is in the variable, but not anymore in the session

?>

<h1>Edit a song</h1>

<a href="list.php">Back to list</a>

<?php include 'alerts.php'; ?>

<form action="update.php?id=<?= $id ?>" method="post">

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
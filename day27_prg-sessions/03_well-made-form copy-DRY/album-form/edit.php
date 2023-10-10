<?php

require_once 'bootstrap.php';

$id = $_GET['id'] ?? null;

if ($id) {
    $album = find($id, 'Album');
} else {
    $album = new Album;
}

$success_message = session()->get('success_message', null);

$errors = session()->get('errors', []);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Add / edit an album</h1>

    <a href="list.php">Back to list</a>

    <?php include '../alerts.php'; ?>

    <?php if ($id): ?>
        <form action="save.php?id=<?= $id ?>" method="post">
        <?php else: ?>
            <form action="save.php" method="post">
            <?php endif; ?>

            Name:<br>
            <input type="text" name="name" value="<?= htmlspecialchars((string) old('name', $album->name)) ?>"><br>
            <br>

            Author:<br>
            <input type="text" name="author"
                value="<?= htmlspecialchars((string) old('author', $album->author)) ?>"><br>
            <br>

            Year:<br>
            <input type="text" name="year" value="<?= htmlspecialchars((string) old('year', $album->year)) ?>">
            seconds<br>
            <br>

            <button type="submit">Save</button>

        </form>
</body>

</html>
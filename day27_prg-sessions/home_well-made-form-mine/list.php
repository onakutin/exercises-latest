<?php

require_once 'bootstrap.php';

$songs = select(0, 0, 'Song');

$columns =
    [
        'id' => 'Nr',
        'name' => 'Name',
        'author' => 'Author',
        'length' => 'Length',
        'album' => 'Album'
    ];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <style>
        th,
        td {
            border: solid 1px silver;
        }
    </style>
</head>

<body>
    <h1>List of Songs</h1>
    <br>

    <a href="edit.php">Insert a new song</a>

    <table>
        <thead>
            <tr>
                <?php foreach ($columns as $column): ?>
                    <th>
                        <?= $column ?>
                    </th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($songs as $song): ?>
                <tr>
                    <?php foreach ($song as $detail): ?>
                        <td>
                            <?= $detail ?>
                        </td>
                    <?php endforeach; ?>
                    <td>
                        <a href="edit.php?id=<?= $song->id ?>">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>
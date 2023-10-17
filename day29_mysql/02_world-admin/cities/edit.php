<?php

require_once '../lib/bootstrap.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    $city = new City;
} else {
    $city = DB::selectOne('
    SELECT *
    FROM `cities`
    WHERE `id` = (?)
    ',
        [$id],
        'City'
    );
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities</title>
    <style>
        .success-message {
            background-color: lightgreen;
            color: darkgreen;
        }

        .error-message {
            background-color: orange;
            color: red;
        }
    </style>
</head>

<body>
    <h1>Add / edit a city</h1>

    <a href="list.php">Back to list</a>

    <?php include '../components/alerts.php'; ?>

    <?php if ($id): ?>
        <form action="store.php?id=<?= $id ?>" method="post">
        <?php else: ?>
            <form action="store.php" method="post">
            <?php endif; ?>

            <!-- <input id="id" name="id" type="hidden" value="<?= $city->id ?>" /> -->

            Name:<br>
            <input type=" text" name="name" value="<?= htmlspecialchars((string) old('name', $city->name)) ?>"><br>
            <br>

            District:<br>
            <input type="text" name="district"
                value="<?= htmlspecialchars((string) old('district', $city->district)) ?>"><br>
            <br>

            Country id:<br>
            <input type="number" name="country_id"
                value="<?= htmlspecialchars((string) old('country_id', $city->country_id)) ?>"><br>
            <br>

            Population:<br>
            <input type="text" name="population"
                value="<?= htmlspecialchars((string) old('population', $city->population)) ?>"><br>
            <br>

            <button type="submit">Save</button>

        </form>

</body>

</html>
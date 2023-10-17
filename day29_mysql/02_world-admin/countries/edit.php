<?php

require_once '../lib/bootstrap.php';

$id = $_GET['id'] ?? null;

if ($id) {
    $country = DB::selectOne('
    SELECT *
    FROM `countries`
    WHERE `id` = ?
    ', [$id], 'Country');
} else {
    $country = new Country;
}

$labels = [];
foreach ($country as $key => $detail) {
    $labels[] = $key;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countries</title>
</head>

<body>
    <h1>
        <?php if ($id): ?> Edit
        <?php else: ?> Enter
        <?php endif ?>details of the country
    </h1>

    <?php include '../components/alerts.php' ?>

    <a href="list.php">Back to list</a>

    <?php if ($id): ?>
        <form action="store.php?id=<?= $country->id ?>" method="post">
        <?php else: ?>
            <form action="store.php" method="post">
            <?php endif ?>
            <?php foreach ($labels as $label): ?>

                <?php if ($label !== 'id'): ?>
                    <?= ucfirst($label) ?>:<br>
                    <input type="text" name="<?= $label ?>"
                        value="<?= htmlspecialchars((string) old($label, $country->$label)) ?>"><br>
                    <br>
                <?php endif ?>

            <?php endforeach ?>
            <button type="submit">Save</button>

        </form>

</body>

</html>
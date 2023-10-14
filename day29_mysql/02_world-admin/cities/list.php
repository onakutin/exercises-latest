<?php

require_once 'bootstrap.php';

$cities = DB::select('
SELECT *
FROM `cities`
ORDER BY `name` ASC
LIMIT 0, 20
', [], 'City');

$columns = [];
foreach ($cities[0] as $key => $detail) {
    $columns[] = $key;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countries</title>
    <style>
        th,
        td {
            border: solid 1px silver;

        }
    </style>
</head>

<body>
    <a href="edit.php?">Insert new city</a>
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
            <?php foreach ($cities as $city): ?>
                <tr>
                    <?php foreach ($city as $detail): ?>
                        <td>
                            <?= $detail ?>
                        </td>
                    <?php endforeach; ?>
                    <td>
                        <a href="edit.php?id=<?= $city->id ?>">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>

</body>

</html>
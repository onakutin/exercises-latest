<?php

require_once 'DB.php';
require_once 'City.php';

DB::connect(
    '127.0.0.1',
    'world',
    'root',
    ''
);

$cities = DB::select(
    'SELECT * FROM `cities` WHERE 1 ORDER BY `population` DESC LIMIT 100',
    [],
    'City'
);

function get_cities($page_nr)
{
    return DB::select(
        'SELECT * FROM `cities` WHERE 1 ORDER BY `id` LIMIT ' . ($page_nr - 1) * 20 . ', 20',
        [],
        'City'
    );
}
;

$cities = get_cities(2);

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
    <title>Document</title>
    <style>
        th,
        td {
            border: solid 1px silver;

        }
    </style>
</head>

<body>
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
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>

</body>

</html>
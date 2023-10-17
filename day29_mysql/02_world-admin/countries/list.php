<?php

require_once '../lib/bootstrap.php';


$allCountries = DB::select('
SELECT *
FROM `countries`
ORDER BY `name` ASC
', [], 'Country');

$numberOfCountries = count($allCountries);

$numberOfPages = ceil($numberOfCountries / 20);

$page = $_GET['page'] ?? 1;


$offset = ($page - 1) * 20;

$orderby = $_GET['orderby'] ?? 'name';
$orderway = $_GET['orderway'] ?? 'asc';

$countries = DB::select('
SELECT *
FROM `countries`
ORDER BY `' . $orderby . '` ' . $orderway . '
LIMIT ' . $offset . ', 20
', [], 'Country');


$columns = [];
foreach ($countries[0] as $key => $detail) {
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
        th {
            border: solid 1px darkgray;
            padding: 0.5rem 1rem;
        }

        td {
            border: solid 1px lightgray;
            padding: 0 0.6rem;
        }
    </style>
</head>

<body>
    <h1>List of all countries</h1>

    <a href="edit.php">Insert new Country</a>

    <table>
        <thead>
            <tr>
                <?php foreach ($columns as $column): ?>
                    <th>
                        <?php if ($orderby === $column): ?>
                            <?php if ($orderway === 'asc'): ?>

                                <a href="?orderby=<?= $column ?>&orderway=desc&page=1">
                                <?php else: ?>
                                    <a href="?orderby=<?= $column ?>&orderway=asc&page=1">
                                    <?php endif; ?>

                                <?php else: ?>
                                    <a href="?orderby=<?= $column ?>&orderway=asc&page=1">

                                    <?php endif; ?>

                                    <?= $column ?>
                                </a>
                    </th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($countries as $country): ?>
                <tr>
                    <?php foreach ($country as $detail): ?>
                        <td>
                            <?= $detail ?>
                        </td>
                    <?php endforeach; ?>
                    <td>
                        <a href="edit.php?id=<?= $country->id ?>">edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>


<?php if ($page > 1): ?>
    <a href="?orderby=<?= $orderby ?>&orderway=<?= $orderway ?>&page=1">1</a>
    <a href="?orderby=<?= $orderby ?>&orderway=<?= $orderway ?>&page=<?= $page - 1 ?>">
        < </a>
        <?php endif; ?>

        <?= $page ?>

        <?php if ($page < $numberOfPages): ?>
            <a href="?orderby=<?= $orderby ?>&orderway=<?= $orderway ?>&page=<?= $page + 1 ?>">
                > </a>
            <a href="?orderby=<?= $orderby ?>&orderway=<?= $orderway ?>&page=<?= $numberOfPages ?>">
                <?= $numberOfPages ?>
            </a>
        <?php endif; ?>



</html>
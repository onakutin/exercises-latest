<?php

var_dump($_GET);

include('data.php');
include('functions.php');

$columns = [
    'title' => 'Movie title',
    'rating' => 'Rating',
    'year' => 'Release year'
];

$sort_by = $_GET['sortby'] ?? 'title';
$sort_way = $_GET['sortway'] ?? 'asc';

$sorted_movies = sortMovies($movies, $sort_by, $sort_way);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort movies with _GET</title>
    <style>
        th,
        td {
            border: solid 1px black;
            padding: 0.5rem 1.5rem;
        }
    </style>
</head>

<body>
    <h1>I can sort movies like this</h1>
    <table>
        <thead>
            <tr>
                <?php foreach ($columns as $key => $column): ?>

                    <th>
                        <?php if ($_GET['sortby'] === $key): ?>
                            <?php if ($_GET['sortway'] === 'asc'): ?>
                                <a href="?sortby=<?= $key ?>&sortway=desc">
                                <?php else: ?>
                                    <a href="?sortby=<?= $key ?>&sortway=asc">
                                    <?php endif; ?>
                                <?php else: ?>
                                    <a href="?sortby=<?= $key ?>&sortway=asc">
                                    <?php endif; ?>
                                    <?= $column ?>
                                </a>
                    </th>

                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sorted_movies as $movie): ?>
                <tr>
                    <?php foreach ($movie as $detail): ?>
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
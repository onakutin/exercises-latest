<?php
include 'data.php';
include 'functions.php';

$sortby = $_GET['sortby'] ?? 'title';
$sortway = $_GET['sortway'] ?? 'asc';

$sortedMovies = sortMovies($movies, $sortby, $sortway);

$columns = [
    'title' => 'Movie Title',
    'rating' => "Rating",
    'year' => 'Year of Release'
];

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
                        <?php if ($sortby === $key && $sortway === 'asc'): ?>
                            <a href="?sortby=<?= $key ?>&sortway=desc">
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
            <?php foreach ($sortedMovies as $movie): ?>
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
<?php
include('data.php');
include('functions.php');

$columns = [
    'title' => 'Movie Title',
    'rating' => 'Rating',
    'year' => 'Release Year'
];

if (isset($_GET['orderby'])) {
    $orderby = $_GET['orderby'];
} else {
    $orderby = 'title';
}
;
if (isset($_GET['orderway'])) {
    $orderway = $_GET['orderway'];
} else {
    $orderway = 'asc';
}
;

$sorted_movies = sortMovies($movies, $orderby, $orderway);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort Movies with _GET</title>

    <style>
        th,
        td {
            border: 1px solid silver;
            padding: 0.25em 0.5em;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <?php foreach ($columns as $key => $column): ?>
                    <th>
                        <?php if ($orderby === $key): ?>
                            <?php if ($orderway === 'asc'): ?>
                                <a href="?orderby=<?= $key ?>&orderway=desc">
                                <?php else: ?>
                                    <a href="?orderby=<?= $key ?>&orderway=asc">
                                    <?php endif; ?>
                                <?php else: ?>
                                    <a href="?orderby=<?= $key ?>&orderway=asc">
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
                    <?php endforeach ?>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>
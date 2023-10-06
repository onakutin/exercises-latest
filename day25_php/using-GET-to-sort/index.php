<?php

include 'data.php';
include_once 'functions.php';

$orderby = $_GET['orderby'] ?? 'title';
$orderway = $_GET['orderby'] ?? 'title';


var_dump($movies);

$sorted_movies = sortMovies($movies, $orderby, $orderway);

var_dump($sorted_movies);




    
$query_string = http_build_query($movies);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Use GET to sort</title>
</head>
<body>
    <h1>MOVIES</h1>
    <a href="?orderby=title&orderway=asc">Order by title (asc)</a>
    <a href="?orderby=title&orderway=desc">Order by title (desc)</a>
    <a href="?orderby=year&orderway=asc">Order by year (asc)</a>
    <a href="?orderby=year&orderway=desc">Order by year (desc)</a>
    <a href="?orderby=rating&orderway=asc">Order by rating (asc)</a>
    <a href="?orderby=rating&orderway=desc">Order by rating (desc)</a>
    


    <ul>
        <?php
        foreach($sorted_movies as $movie) : ?>
        <li>
            Title: <?= $movie['title']?><br>
            Rating: <?= $movie['rating']?><br>
            Released: <?= $movie['year']?></li>
            <?php endforeach; ?>
    </ul>
    
</body>
</html>
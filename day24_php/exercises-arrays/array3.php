<?php
$movies = [
  'The Shawshank redemption',
  'The Godfather',
  'The Godfather II',
  'Dark Knight', 
  '12 angry men', 
  'Schindler\'s list',
  'Pulp fiction',
  'Lord of the Rings: Return of the King',
  'The good, the bad and the ugly',
  'Fight club'
];

// echo '<ol>';

// foreach($movies as $movie){
//     echo "<li>$movie</li>";
// }

// echo '</ol><br>';

// echo '<ol>';

// for($i=0; $i<count($movies); $i++){
//     echo "<li>{$movies[$i]}</li>";
// };
// echo '</ol><br>';


// echo '<ol>';

// sort($movies);

// for($i=0; $i<count($movies); $i++){
//     echo "<li>{$movies[$i]}</li>";
// };
// echo '</ol><br>';


$movie_names = [
  'tt0468569' => 'Dark Knight', 
  'tt0050083' => '12 angry men', 
  'tt0108052' => 'Schindler\'s list',
  'tt0110912' => 'Pulp fiction',
  'tt0167260' => 'Lord of the Rings: Return of the King',
  'tt0111161' => 'The Shawshank redemption',
  'tt0071562' => 'The Godfather II',
  'tt0060196' => 'The good, the bad and the ugly',
  'tt0137523' => 'Fight club',
  'tt0068646' => 'The Godfather',
];

$movie_ratings = [
  'tt0111161' => 9.2,
  'tt0068646' => 9.2,
  'tt0071562' => 9.0,
  'tt0468569' => 8.9, 
  'tt0050083' => 8.9, 
  'tt0108052' => 8.9,
  'tt0110912' => 8.9,
  'tt0167260' => 8.9,
  'tt0060196' => 8.9,
  'tt0137523' => 8.8,
];

// echo '<ol>';

// asort($movie_ratings);
// foreach($movie_ratings as $key=>$movie_rating){
//     echo "$movie_rating {$movie_names[$key]}<br>";
// }

// echo '</ol><br>';

// echo '<ol>';

// arsort($movie_ratings);
// foreach($movie_ratings as $key=>$movie_rating){
//     echo "$movie_rating {$movie_names[$key]}<br>";
// }

// echo '</ol><br>';


$movies = [];

foreach($movie_ratings as $key=>$movie_rating){
    //$movies[]=$key;
    $movies[$key]=['name'=>$movie_names[$key], 'rating'=>$movie_rating];
};

// print_r($movies);

// echo '<br>';
// $movies_reduced = [];
// foreach($movies as $key=>$movie) {
//   $movies_reduced[] = [$movie[$key]];
// }

// var_dump($movies_reduced);
var_dump($movies);

uasort($movies, function ($a, $b) {
  if ($a['rating'] > $b['rating']) {
    return 1;
  }
  if ($a['rating'] < $b['rating']) {
    return -1;
  }
  if ($a['rating'] == $b['rating']) {
    if ($a['name'] < $b['name']) {
      return -1;
    }
    if ($a['name'] > $b['name']) {
      return 1;
    }
    if ($a['name'] == $b['name']) {
      return 0;
    }
    
  }

});

// echo '<ol>';

foreach($movies as $key=>$movie){
    echo "<li>{$movie['name']} {$movie['rating']}</li><br>";
}

echo '</ol><br>';


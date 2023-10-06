<?php

$students = [];

$students[] = 'Thomas';
$students[] = 'Kathy';
$students[] = 'Eve';
$students[] = 'Bernard';

echo '<h1>People I don\'t know:</h1><ul>';

foreach($students as $student){
    echo "<li>$student</li>";
};

echo '</ul>';


$divisible_by_seven = [];

for($i=0; $i<=100; $i++){
    if ($i % 7 === 0) {
        // array_push($divisible_by_seven, $i);
        // or 
        $divisible_by_seven[]=$i;
    }
}

var_dump($divisible_by_seven);


foreach($divisible_by_seven as $number){
    echo "$number<br>";
}


$cast_crew = [];
$cast_crew['cast'] = [];
$cast_crew['cast'][] = 'John David Washington';
$cast_crew['cast'][] = 'Robert Pattinson';
$cast_crew['cast'][] = 'Elizabeth Debicki';
$cast_crew['director'][] = 'Christopher Nolan';

var_dump($cast_crew);

foreach($cast_crew['cast'] as $crewMember){
    echo "$crewMember<br>";
}

foreach($cast_crew as $crewCategory){
    foreach($crewCategory as $crewMember){
        echo "$crewMember<br>";
    }
}


$cast_crew2 = [
    'actors' => [],
    'directors' => [],
];

$people = [
    [
        'name' => 'John David Washington',
        'job' => 'actor'
    ],
    [
        'name' => 'Robert Pattinson',
        'job' => 'actor'
    ],
    [
        'name' => 'Christopher Nolan',
        'job' => 'director'
    ],
    [
        'name' => 'Steven Spielberg',
        'job' => 'director'
    ],
    [
        'name' => 'Michael Caine',
        'job' => 'actor'
    ]
];

foreach($people as $details){
    // foreach($person as $details){
        if($details['job'] == 'director'){
            $cast_crew2['directors'][] = $details['name'];
        } if($details['job'] === 'actor'){
            $cast_crew2['actors'][] = $details['name'];
        }
        
    }
// }
var_dump($cast_crew2);


$default_values = ['title' => null, 'year' => null, 'rating' => null, 'duration' => null];
$movie = ['title' => 'Tenet', 'year' => 2020, 'rating' => 7.5, 'duration' => 150];

$movie = array_merge($default_values, $movie);
var_dump($movie);
echo '<br>';

$movies = [
    [
        'title' => 'Dunkerk',
        'year' => 2017,
        'pg' => 13,
        'favourite' => false
    ],
    [
        'title' => 'Tenet',
        'year' => 2020,
        'pg' => 13,
    ],
    [
        'title' => 'Interstellar',
        'year' => 2014,
        'pg' => 13,
        'favourite' => false
    ],
    [
        'title' => 'Inception',
        'year' => 2010,
        'pg' => 13,
        'favourite' => true
    ],
    [
        'title' => 'The Prestige',
        'year' => 2006,
        'pg' => 13,
    ],
    [
        'title' => 'Batman begins',
        'year' => 2005,
        'pg' => 12,
        'favourite' => true
    ],
    [
        'title' => 'The Dark Knight',
        'year' => 2008,
        'pg' => 12,
        'favourite' => true
    ],
    [
        'title' => 'The Dark Knight Rises',
        'year' => 2012,
        'pg' => 12,
        'favourite' => false
    ],
];

$favourite_movies = [];

foreach ($movies as $movie) {
    if(isset($movie['favourite']) && $movie['favourite']) {
        $favourite_movies[] = $movie['title'];
    }    
};

var_dump($favourite_movies);
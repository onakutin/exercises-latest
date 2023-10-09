<?php

$message = 'I love coding';
$length = strlen($message);

echo "The length of the message '$message' is $length.";


// the variables are deliberately initialized with null so that you don't think about their current values

// their current value can be any number

$price = null; // integer
$in_stock = null; // integer
$on_sale = null; // boolean
$max_price = null; // integer
$amount_wanted = null; // integer

if ($amount_wanted > 0 && $in_stock >= $amount_wanted && ($price <= $max_price || $on_sale === true)) {

}


$calling_codes = [
    'AR' => '+54',
    'CZ' => '+420',
    'DE' => '+49',
    'HU' => '+36',
    'US' => '+1'
];

$country_names = [
    'US' => 'USA',
    'HU' => 'Hungary',
    'CZ' => 'Czechia',
    'AR' => 'Argentina',
    'DE' => 'Germany',
    'DK' => 'Denmark',
    'IN' => 'India'
];

var_dump($calling_codes);


$message = [];

foreach ($country_names as $i => $name) {
    foreach ($calling_codes as $j => $code) {
        if ($i == $j) {
            $message[] = "The calling code of $name is $code";
        }
    }
}
var_dump($message);


$cities = ['Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London'];

foreach ($cities as $city) {
    echo "$city, ";
}
echo "<br>";

sort($cities);
var_dump($cities);

echo '<ul>';
foreach ($cities as $city) {
    echo "<li>$city</li>";
}
echo '</ul>';

array_push($cities, 'Los Angeles', 'Calcutta', 'Osaka', 'Beijing');
var_dump($cities);

sort($cities);
echo '<br>';

echo '<ul>';
foreach ($cities as $city) {
    echo "<li>$city</li>";
}
echo '</ul>';
echo '<br>';


$i = 0;
while ($i < count($cities)) {
    echo "$cities[$i]<br>";
    $i++;
}


$cities = array(
    "Tokyo" => 150,
    "Mexico City" => 60,
    "New York City" => 200,
    "Mumbai" => 80,
    "Seoul" => 130,
    "Shanghai" => 90,
    "Lagos" => 60,
    "Buenos Aires" => 80,
    "Cairo" => 50,
    "London" => 180
);

foreach ($cities as $city => $price) {
    echo "A night in $city costs $price dollars.<br>";
}


?>
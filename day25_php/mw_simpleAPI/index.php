<?php

$data = [
    ['fact' => "In Holland\'s embassy in Moscow, Russia, the staff noticed that the two Siamese cats kept meowing and clawing at the walls of the building. Their owners finally investigated, thinking they would find mice. Instead, they discovered microphones hidden by Russian spies. The cats heard the microphones when they turned on.",
    'length' => 318],
    ['fact' => "Random text",
    'length' => 11],
    ['fact' => "Another random text",
    'length' => 19]
];

$random_fact_i = rand(0, count($data) - 1);

$fact = $data[$random_fact_i];
    
header('Content-Type: application/json');

echo json_encode($fact);

?>
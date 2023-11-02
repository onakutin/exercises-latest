<?php

$strings = [
    '12345',
    '123-product',
    'product-123',
    'product-name',
    'Product name',
    'manager@eshop.com',
    '<h1>
    Product name
</h1>'
];

$results = [];

foreach ($strings as $string) {
    if (preg_match('#^[\w\-]+$#', $string)) {
        $results[] = $string;
    }
}

var_dump($results);


$paragraph = 'And then it happened.......';

$newParagraph = preg_replace('#\.+$#', '...', $paragraph);

var_dump($newParagraph);


$paragraphs = [
    'And then it happened.......',
    'And the boy never smiled again....           ',
    'So ends the story of the cowboy and the samurai...
{1}
    ',
];


$newParagraphs = [];

foreach ($paragraphs as $paragraph) {
    // $newParagraphs[] = trim($paragraph);
    $newParagraphs[] = preg_replace('#\.+\s*(.*)\s*$#', '...', $paragraph); // does not leave the {1} as the trim does
}

var_dump($newParagraphs);

// $urls = [
//     'www.codingbootcamp.cz',
//     'google.com',
//     'script.aculo.us',
//     'apiary.io'
// ];

// foreach ($urls as $url) {
//     preg_match('#\.[a-z]+$#', $url, $matches[]);
// }

// preg_match_all('#<[^>]+>#', '<h1><h2><span><div>', $matches);
// var_dump($matches);

// $css = 'button {
//     background-color: red;
//     color: white;
//     border-radius: 0.5em;
//     padding: 0.5em 1em;
//     cursor: pointer;
// }';

// preg_match_all('#[\w\-]+:#', $css, $matches);
// var_dump($matches);


$string = '"Wingardium Leviosa!" yelled Harry. "Alohomora!" followed Ron.';

preg_match_all('#"(.*?)"#', $string, $matches);
var_dump($matches);


// $view_path = 'product/detail/partials.buttons.buy';

// $split = preg_split('#[\./]#', $view_path);
// var_dump($split);


$view_path = 'product\detail/partials.buttons.buy';
$new_path = preg_replace('#[\\\.]#', '/', $view_path);
var_dump($new_path);


$urls = [
        'www.example.com',
        'https://codingbootcamp.cz',
        'nytimes.com',
        'http://home',
        'http.transferprotocols.io',
        'https://drive.google.com'
    ];

$addScheme($url)

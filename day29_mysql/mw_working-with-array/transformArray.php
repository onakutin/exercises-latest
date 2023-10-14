<?php

require_once 'Person.php';

$old_array = [
    [
        'name' => 'Bruce',
        'surname' => 'Wayne',
        'occupation' => 'billionaire'
    ],
    [
        'name' => 'Clark',
        'surname' => 'Kent',
        'occupation' => 'reporter'
    ],
    [
        'name' => 'Peter',
        'surname' => 'Parker',
        'occupation' => 'photographer'
    ]
];


$new_array = [];


$new_array = array_map(function ($item) {
    return [
        'full_name' => $item['name'] . ' ' . $item['surname'],
        'job' => $item['occupation']
    ];
}, $old_array);
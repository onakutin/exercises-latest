<?php

require_once 'DB.php';
require_once 'Celebrity.php';

DB::connect(
    '127.0.0.1',
    'celebrities',
    'root',
    ''
);

$celebrities = DB::select('
    SELECT celebrities.*
    FROM celebrities
    LEFT JOIN standings ON celebrities.id = standings.celebrity_id
    WHERE standings.year = 2019
    ORDER BY wealth DESC
    LIMIT 20',
    [],
    'Celebrity'
);

header('Content-Type: application/json');

echo json_encode($celebrities);
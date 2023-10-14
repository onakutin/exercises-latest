<?php

require_once 'DB.php';
require_once 'Session.php';
require_once 'helpers.php';
require_once 'City.php';

DB::connect(
    '127.0.0.1',
    'world',
    'root',
    ''
);

session();
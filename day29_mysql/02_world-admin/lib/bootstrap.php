<?php

require_once 'DB.php';
require_once 'Session.php';
require_once 'helpers.php';
require_once '../models/City.php';
require_once '../models/Country.php';

DB::connect(
    '127.0.0.1',
    'world',
    'root',
    ''
);

session();
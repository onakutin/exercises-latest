<?php

class Warehouse
{
    public $name = null;
    protected $nr_of_crates = 0;
    protected $crates = [];

    public function addCrate($contents)
    {
        $this->crates[] = $contents;
        $this->nr_of_crates += 1;
    }
}

$warehouse = new Warehouse;
$warehouse->name = 'Docks warehouse';
[
    'Arc of Covenant',
    'Doomsday device',
    'Box of contortionists'
];

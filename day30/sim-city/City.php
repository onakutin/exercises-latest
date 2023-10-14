<?php

require_once "DB.php";

class City
{
    public $id = null;
    public $name = null;
    public $district = null;
    public $country_id = null;
    public $population = null;

    public function insert()
    {
        DB::insert('
        INSERT
        INTO `cities`
        (`name`, `country_id`, `district`, `population`)
        VALUES
        (?,?,?,?)',
            [$this->name, $this->country_id, $this->district, $this->population]
        );

    }
}
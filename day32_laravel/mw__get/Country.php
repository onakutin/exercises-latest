<?php

class Country
{
    public $id = null;
    public $code = null;
    public $code_alpha2 = null;
    public $name = null;
    public $continent = null;
    public $continent_id = null;
    public $region = null;
    public $surface_area = null;
    public $population = null;
    public $gnp = null;
    public $head_of_state = null;
    public $capital_city_id = null;
    public $relations = [];
    public function __get($property_name)

    {
        var_dump($property_name);
        die();
        if ($property_name === 'cities') {
            // if 'cities' was not yet filled into relations
            // = a database query was not yet made
            if (!array_key_exists('cities', $this->relations)) {
                // do the database query, select the cities
                // and put them into relations
                $this->relations['cities'] = City::getCitiesForCountry($this->id);
            }

            // ALLWAYS - return what we have in relations['cities']
            return $this->relations['cities'];
        }
    }
}

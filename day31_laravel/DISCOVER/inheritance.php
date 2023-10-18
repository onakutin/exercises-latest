<?php

class Match
{
    public $begins_at = null;
    public $score = null;
    public $nr_of_players = null;
    public $length = null;
    public function __construct($time)
    {
        $this->begins_at = $time;
    } 

    public function getEstimatedEnd($begins_at)
    {
        $begins_at_timestamp = strtotime($this->begins_at);
        $ends_at_timestamp = $begins_at_timestamp + (60 * $this->length);
        $ends_at_string = date('Y-m-d H:i:s', $ends_at_timestamp);
        return $ends_at_string;
    }
}
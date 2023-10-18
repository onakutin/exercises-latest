<?php

class MatchClass
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

class FootballMatch extends MatchClass
{
    public $nr_of_players = 22;
    public $length = 90;
    public $halves = ['0:0', '0:0'];
    public $nr_offsides = '0';
}

class IcehockeyMatch extends MatchClass
{
    public $nr_of_players = 12;
    public $length = 60;
    public $thirds = ['0:0', '0:0', '0:0'];
    public function getThirdScore($third)
    {
        $thirdScore = $this->thirds[$third];
        return ($thirdScore);
    }
}

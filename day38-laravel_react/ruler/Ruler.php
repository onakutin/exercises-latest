<?php

require('Section');

class Ruler
{
    public int $length = 40;
    public int $sections = 10;

    public function __construct(int $length, int $sections = 10)
    {
        $this->length = $length;
        $this->sections = $sections;
    }
}

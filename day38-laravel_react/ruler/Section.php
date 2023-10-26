<?php

class Section
{
    public int $size = 2;

    public function __construct(int $size = 2)
    {
        $this->size = $size;
    }
}

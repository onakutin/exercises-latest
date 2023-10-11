<?php

class Board
{
    public function __construct(?array $position)
    {

    }
    public function __toString()
    {
        $letters = range('a', 'h');
        return '<div class="board">';
    }
}
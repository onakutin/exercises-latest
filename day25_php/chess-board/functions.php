<?php
function return_color($i)
{
    if (
        ((($i < 8) || (15 < $i && $i < 24) || (31 < $i && $i < 40) || (47 < $i && $i < 56)) && $i % 2 == 0) ||
        ((($i > 7 && $i < 16) || ($i > 23 && $i < 32) || (39 < $i && $i < 48) || (55 < $i)) && $i % 2 !== 0)
    ) {
        $color = 'white';
    } else {
        $color = 'black';
    }
    return $color;
}

function return_player($i)
{
    $player = '';

    if ($i === 25) {
        $player = '<img src="https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/king.png" />';
    } elseif ($i === 61) {
        $player = '<img src="https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/queen.png" />';
    }
    return $player;
}
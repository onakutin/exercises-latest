<?php

include 'function.php';


function return_player($i)
{
    $white_king = 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/king.png';
    $king_white = base64_encode(file_get_contents($white_king));

    $white_queen = 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/queen.png';
    $queen_white = base64_encode(file_get_contents($white_queen));

    if ($i === 26) {
        $player = $king_white;
    } elseif ($i === 62) {
        $player = $queen_white;
    } else {
        $player = '';
    }
}
?>


<div class="row">
    <?php
    for ($i = 0; $i < 64; $i++) {
        $color = return_color($i);
        $player = return_player($i);

        echo "<div class=\"{$color}\">{$player}</div>";

    }
    ?>
</div>
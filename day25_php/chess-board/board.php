<?php

include 'functions.php';

?>


<div class="row">
    <?php
    for ($i = 0; $i < 64; $i++) {
        $color = return_color($i);
        $player = return_player($i);

        echo "<div class=\"{$color} row__field\">{$player}</div>";

    }
    ?>
</div>
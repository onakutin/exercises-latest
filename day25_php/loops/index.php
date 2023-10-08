<?php

$time_served = 0;

while ($time_served < 10) {
    $time_served += 1;
    echo "The prisoner has served $time_served years.";
}
echo '<br>';

$time_served = 0;

do {
    $time_served += 1;
    echo "The prisoner has served $time_served years.";
}
while ($time_served < 10);
echo '<br>';


for ($i = 0; $i < 5; $i++) {
    echo "The prisoner has " . (5 - $i) . " more years to serve.";
}
echo '<br>';


for ($i = 10; $i > 0; $i--) {
    echo "The prisoner has " . $i . " more years to serve.<br>";
    if ($i > 5) {
        continue;
    }
    echo "Going to a parole hearing...";
    if ($i === 2) {
        echo "Paroled";
        break;
    }

}

?>
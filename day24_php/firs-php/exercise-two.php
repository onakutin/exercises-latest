<?php

$number = 1;

function raiseNumber($insertedNumber){
    $insertedNumber++;
    echo $insertedNumber;
}

raiseNumber($number);
echo $number;

function headline($text, $importance = 1){
    return "<h$importance>$text</h$importance>";
}

echo headline('test', 4);
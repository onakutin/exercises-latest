<?php

function compare($numOne, $numTwo)
{
    if ($numOne == $numTwo) {
        return 0;
    }
    if ($numOne > $numTwo) {
        return 1;
    }
    if ($numOne < $numTwo) {
        return -1;
    }
}
;

function giveClue($diff)
{
    if ($diff == 0) {
        echo "Success ! You found the right number.";
    } elseif ($diff == 1) {
        echo "The given number is too low.";
    } elseif ($diff == -1) {
        echo "The given number is too height.";
    }
};

function getGivenNumber($number){
    return $number;
}


function replay($answer){
    if($answer === 'yes' || $answer === 'y'){
        return true;
    } else {
        return false;
    }
};


function play()
<?php

function square(float $val)
{
    return $val * $val;
}

function squareRoot(float $val)
{
    return sqrt($val);
}

function calcHypotenuse(float $firstSideLength, float $secondSideLength)
{
    /**
     * Complete the code to calculate the length of the hypotenuse from the length of the
     * first side and the second side using the square and squareRoot functions.
     */
    $hypotenuseLength = null;

    $hypotenuseLength = squareRoot(square($firstSideLength) + square($secondSideLength));
    return $hypotenuseLength;
}

$firstSideLength = null;
do {
    $firstSideLength = readline("Please enter the first side length: ");
} while ($firstSideLength == null);

$secondSideLength = null;
do {
    $secondSideLength = readline("Please enter the second side length: ");
} while ($secondSideLength == null);

echo calcHypotenuse($firstSideLength, $secondSideLength);
<?php

$my_name = 'Ondra';
$height = 1.79;

var_dump($my_name);
var_dump($height);

function headline($text)
{
    return "<h1>$text</h1>";
}
echo headline('My Website');
echo '<br>';

$inches = 12;

function inchesToCentimeters($inches)
{
    return $inches * 2.54;
}

echo inchesToCentimeters($inches);
echo '<br>';

$celsius = 100;

function celsiusToFahrenheit($tempCelsius)
{
    return $tempCelsius * 9 / 5 + 32;
}

echo celsiusToFahrenheit($celsius);
echo '<br>';


$temperature = 37.5;

function isHealthy($tempValue, $unit)
{
    if ($unit === 'f') {
        $temp = ($tempValue - 32) * 5 / 9;
    } else {
        $temp = $tempValue;
    }
    if ($temp < 37) {
        return true;
    } else
        return false;
}

echo isHealthy($temperature, 'c');
echo '<br>';

$number = 41;

function evenOrOdd($number)
{
    return ($number % 2 ? 'odd' : 'even');
}

echo evenOrOdd($number);
echo '<br>';


$weekday = 'Saturday';

function sayWeekday($day)
{
    echo "Today is {$day}";
}

sayWeekday($weekday);


$yearOfBirth = 1980;

function sayBirthday($year)
{
    $thisYear = date('Y');
    echo "I was born in $year so this year I am celebrating my " . $thisYear - $year . ". birthday.";
}

sayBirthday($yearOfBirth);
echo '<br>';

function assessHeight($heightCm)
{
    if ($heightCm >= 180) {
        return 'tall';
    } elseif ($heightCm < 160) {
        return 'small';
    } else {
        return 'average';
    }
}
echo assessHeight(159);
echo '<br>';

function getLanguageUsage($languageName)
{
    switch (strtolower($languageName)) {
        case 'php';
        case 'python';
        case 'ruby':
            echo 'serverside';
            break;
        case 'javascript':
            echo 'clientside';
            break;
        default:
            echo 'i don\'t know';
    }
}
getLanguageUsage('PHP');

if ($age < 25) {
}
;
if ($employed) {
}
;
if ($age > 34 && !$employed) {
}
;
if (!($age > 18)) {
}
if ($age < 12 && $gender === 'female') {
}
;
if ($age >= 18 && !$employed) {
}
;
if ($age >= 60 && $employed && $gender === 'female') {
}
;
if (($gender === 'male' && $age > 20) || (!$employed && $gender === 'female' && $age > 25)) {
}
;
;

?>
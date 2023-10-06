<?php 
$firs_name = 'Ondrej';
$surname = 'Kutina';

echo "First name: $firs_name</br>Last name: $surname";

echo 'First name: '.$firs_name."</br>Last name: ".$surname;

$yearOfBirth = 1980;
$height = 179;

echo "The year of birth: $yearOfBirth<br>";
echo "my height is $height<br>";

define('SERVER_NAME', 'Apache');
$server = SERVER_NAME;
echo "My server is " . SERVER_NAME . "<BR>";
echo "My server is $server<br>";

function greet_world()
{
    echo 'Hello world<br>';
}
greet_world();

function greet($whom){
    echo "Hello, $whom<br>";
}
greet('Ona');


function greeting($whom){
    return "Hello, $whom<br>";
}
echo greeting('ALL');

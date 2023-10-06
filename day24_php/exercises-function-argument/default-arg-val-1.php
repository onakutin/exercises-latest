<?php
function element($element, $innerHTML='', $attributes='')
{
    return "<$element $attributes>$innerHTML</$element>";
}
echo element('p', 'ahoj', 'class="class"');


function convert_weight($value, $unit='kg')
{
    switch($unit){
        default:
        case 'kg':
            return $value*2.20462262 .' lb';
            break;
        case 'lb':
            return $value/2.20462262 .' kg';
            break;

    }
    // return ($unit=='kg' ? $value*2.20462262 .' kg' : $value/2.20462262 .' lb');
}
echo convert_weight(80, 'lb');


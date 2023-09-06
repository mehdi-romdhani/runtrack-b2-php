<?php


function lenght(string $str): int
{
    $count = 0;

    for ($i = 0; isset($str[$i]); $i++) {
        $count++;
    }

    return $count;
}

function my_str_reverse(string $string): string
{

    $strReverse = '';

    for ($i = lenght($string) - 1; $i >= 0; $i--) {
        $strReverse .= $string[$i];
    }

    return $strReverse;
}


echo (my_str_reverse('alban'));

<?php

function my_fizz_buzz(int $length): array
{

    $fizzArray = [];

    for ($i = 1; $i < $length; $i++) {
        if ($i % 3 === 0) {
            $fizzArray[] = "Fizz";
        } elseif ($i % 5 === 0) {
            $fizzArray[] = "Buzz";
        } elseif ($i % 3 === 0 && $i % 5 === 0) {
            $fizzArray[] = "FizzBuzz";
        } else {
            $fizzArray[] = $i;
        }
    }

    return $fizzArray;
}

var_dump(my_fizz_buzz(15));

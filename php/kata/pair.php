<?php

function is_pair(string $sequence): bool
{
    // Homework: Complete the function in order to resolve pair problem,
    // see the examples in the bottom of file

    $stack_for_paranesis = 0;
    $stack_for_aqulad = 0;
    $stack_for_korushe = 0;

    foreach (str_split($sequence) as $value) {

        $stack_for_paranesis += calculateQtyOfCharacter($value, '(', ')');
        $stack_for_aqulad += calculateQtyOfCharacter($value, '[', ']');
        $stack_for_korushe += calculateQtyOfCharacter($value, '{', '}');

        if ($stack_for_paranesis < 0 || $stack_for_korushe < 0 || $stack_for_aqulad < 0) {
            return false;
        }
    }
    
    if ($stack_for_paranesis == 0 && $stack_for_korushe == 0 && $stack_for_aqulad == 0) {
        return true;
    }
    return false;
}

function calculateQtyOfCharacter(string $value, $open_character, $close_character): int
{
    $result = 0;
    if ($value == $open_character) {
        $result++;
    } elseif ($value == $close_character) {
        $result--;
    }
    return $result;
}


// var_dump(is_pair('()()')); // true
var_dump(is_pair('())()')); // false
// var_dump(is_pair(')(')); // false

<?php

function is_anagram(string $s1, string $s2): bool
{
    $s1 = str_split(strtolower(str_replace(' ', '', $s1)));
    $s2 = str_split(strtolower(str_replace(' ', '', $s2)));

    sort($s1);
    sort($s2);

    return $s1 === $s2;
}

function is_anagram3(string $s1, $s2): bool
{
    // Home work: complete the function using count_chars bultin function
    //we assume that all the character are lowercase
    $sum = 0;
    foreach (str_split($s1) as $value) {
        $sum += ord("$value");
    }
    foreach (str_split($s2) as $value) {
        $sum -= ord("$value");
    }
    if ($sum == 0) {
        return true;
    }

    return false;
}

var_dump(is_anagram3('public relations', 'capture billions'));

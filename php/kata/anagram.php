<?php

function is_anagram(string $s1, string $s2): bool
{
    $s1 = str_split(strtolower(str_replace(' ', '', $s1)));
    $s2 = str_split(strtolower(str_replace(' ', '', $s2)));

    sort($s1);
    sort($s2);

    return $s1 === $s2;
}


function is_anagram2(string $s1, $s2): bool
{
    // Home work: complete the function using count_chars bultin function
    $s1 = count_chars($s1, 3);

    $s2 = count_chars($s2, 3);

    return $s1 == $s2;
}


// var_dump(is_anagram('Public relations', 'Capture billions'));


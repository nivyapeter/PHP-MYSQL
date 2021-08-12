<?php

function unique_names(array $array1, array $array2) : array
{
    $ab = array_unique(array_merge($array1,$array2));
    return ($ab);
}

$names = unique_names(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']);
echo join(', ', $names); // should print Emma, Olivia, Ava, Sophia
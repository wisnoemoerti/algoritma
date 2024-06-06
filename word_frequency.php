<?php

function countOccurrences($input, $query)
{
    $result = [];
    foreach ($query as $q) {
        $result[] = array_count_values($input)[$q] ?? 0;
    }
    return $result;
}

$input = ['xc', 'dz', 'bbb', 'dz'];
$query = ['bbb', 'ac', 'dz'];
$output = countOccurrences($input, $query);

print_r($output);  // Output: [1, 0, 2]

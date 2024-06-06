<?php

function reverseAlphabet($input)
{
    $alphabets = [];
    $digits = [];

    for ($i = 0; $i < strlen($input); $i++) {
        if (ctype_alpha($input[$i])) {
            $alphabets[] = $input[$i];
        } elseif (ctype_digit($input[$i])) {
            $digits[] = $input[$i];
        }
    }

    $alphabets = array_reverse($alphabets);

    return implode('', $alphabets) . implode('', $digits);
}

$input = "NEGIE1";
$output = reverseAlphabet($input);
echo "Hasil: " . $output;

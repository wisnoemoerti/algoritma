<?php

function longest($sentence)
{
    $words = explode(' ', $sentence);
    $longestWord = '';
    foreach ($words as $word) {
        if (strlen($word) > strlen($longestWord)) {
            $longestWord = $word;
        }
    }
    return $longestWord;
}

$sentence = "Saya sangat senang mengerjakan soal algoritma";
$longestWord = longest($sentence);
echo $longestWord . ': ' . strlen($longestWord) . ' characters';

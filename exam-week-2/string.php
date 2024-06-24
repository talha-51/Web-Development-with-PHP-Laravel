<?php

function operation($item)
{
    $vowelCount = 0;
    $vowels = "aeiouAEIOU";

    for ($i = 0; $i < strlen($item); $i++) {
        if (strpos($vowels, $item[$i]) !== false) {
            $vowelCount++;
        }
    }

    echo "Original String: $item, Vowel Count: $vowelCount, Reversed String: " . strrev($item) . "\n";
}

$strings = ["Hello", "World", "PHP", "Programming"];
array_map("operation", $strings);

<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {

    $vowelCount = 0;

    for ($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];
        if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u' ||
            $char == 'A' || $char == 'E' || $char == 'I' || $char == 'O' || $char == 'U') {
            $vowelCount++;
        }
    }

    $reversedString = strrev($string);

    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
?>

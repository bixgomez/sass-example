<?php
// Array of words
$words = ["apple", "banana", "cherry", "date", "elderberry", "fig", "grape", "honeydew", "kiwi", "lemon", "mango", "nectarine", "orange", "papaya", "quince", "raspberry", "strawberry", "tangerine", "ugli", "vanilla", "watermelon", "xigua", "yam", "zucchini"];

// Array to store 900 random words
$randomWords = [];

// Generating 900 random words
for ($i = 0; $i < 1000; $i++) {
    $randomWords[] = $words[array_rand($words)];
}

// Output the random words
foreach ($randomWords as $word) {
    echo $word . "\n";
}
?>

<?php

use App\Fibo;

// Register The Auto Loader
require __DIR__ . '/vendor/autoload.php';

// Run The Application
while (true) {
    $index = readline('Enter number (or q for quit) : ');
    if ($index == 'q') break;
    echo (is_numeric($index)) ? $index . "th element is " . Fibo::digits_sequence($index) . "\n" : "$index is not number";
}
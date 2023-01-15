<?php

namespace App;

class Fibo
{

    // main function base on 24 numbers period
    public static function digits_sequence(int $n): int
    {
        $results = [2, 3, 5, 8, 13, 12, 7, 10, 8, 9, 17, 17, 16, 15, 13, 10, 5, 6, 11, 8, 10, 9, 10, 10];
        return match ($n) {
            0 => 0,
            1, 2 => 1,
            default => $results[(($n - 3) % 24)]
        };
    }
}
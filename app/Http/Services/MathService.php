<?php

namespace App\Http\Services;

class MathService
{
    public static function sum(int $a, int $b): int
    {
        return $a + $b;
    }

    public static function double(int $a, int $b): int
    {
        return $a ** $b;
    }

    public static function recursiveFactorial(int $number): int
    {
        if ($number <= 1)
            return 1;

        return ($number * self::recursiveFactorial($number - 1));
    }
}

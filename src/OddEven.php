<?php

namespace OddEvenChecker;

class OddEven
{
    public static function isOdd(int $number): bool
    {
        return $number % 2 !== 0;
    }

    public static function isEven(int $number): bool
    {
        return $number % 2 === 0;
    }
}

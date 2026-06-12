<?php

namespace App;

class Calculator
{
    public function add(float $a, float $b): float
    {
        return $a + $b;
    }

    public function subtract(float $a, float $b): float
    {
        return $a - $b;
    }

    public function multiply(float $a, float $b): float
    {
        return $a * $b;
    }

    public function divide(float $a, float $b): float
    {
        if ($b == 0.0) {
            return 0.0;
        }

        return $a / $b;
    }

    public function power(float $base, int $exponent): float
    {
        return $base ** $exponent;
    }

    public function percentage(float $total, float $percentage): float
    {
        return $total * ($percentage / 100);
    }

    public function average(array $numbers): float
    {
        if ($numbers === []) {
            return 0.0;
        }

        return array_sum($numbers) / count($numbers);
    }

    public function highest(array $numbers): float
    {
        if ($numbers === []) {
            return 0.0;
        }

        return max($numbers);
    }

    public function lowest(array $numbers): float
    {
        if ($numbers === []) {
            return 0.0;
        }

        return min($numbers);
    }
}

<?php

declare(strict_types=1);

namespace App\Mapper;

class FizzBuzzMapper implements NumberMapperInterface
{
    public function transform(int $number): string
    {
        if ($number % 3 === 0 && $number % 5 === 0) {
            return 'FizzBuzz';
        } elseif ($number % 3 === 0) {
            return 'Fizz';
        } elseif ($number % 5 === 0) {
            return 'Buzz';
        } else {
            return (string) $number;
        }
    }
}

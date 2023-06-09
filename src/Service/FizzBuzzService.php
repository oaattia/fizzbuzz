<?php

namespace App\Service;

class FizzBuzzService
{
    /**
     * @return array<int,string>
     */
    public function generate(string $start, string $end): array
    {
        $output = [];

        for ($i = $start; $i <= $end; $i++) {
            if ($i % 3 === 0 && $i % 5 === 0) {
                $output[] = 'FizzBuzz';
            } elseif ($i % 3 === 0) {
                $output[] = 'Fizz';
            } elseif ($i % 5 === 0) {
                $output[] = 'Buzz';
            } else {
                $output[] = $i;
            }
        }

        return $output;
    }
}

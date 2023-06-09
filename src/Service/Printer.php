<?php

declare(strict_types=1);

namespace App\Service;

use App\Validation\InputValidator;

class Printer
{
    public function __construct(private FizzBuzzService $fizzBuzzService, private  InputValidator $inputValidator)
    {
    }

    public function printFizzBuzz(string $start, string $end): void
    {
        $this->inputValidator->validateInput($start, $end);

        $sequence = $this->fizzBuzzService->generate((int)$start, (int)$end);

        foreach ($sequence as $number) {
            echo $number . PHP_EOL;
        }
    }
}

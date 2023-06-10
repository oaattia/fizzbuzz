<?php

declare(strict_types=1);

namespace App\Validation;

use InvalidArgumentException;

class InputValidator
{
    public function validateInput(string $start, string $end): void
    {
        if (!is_numeric($start) || !is_numeric($end) || $start < 1 || $end < 1 || $start > $end) {
            throw new InvalidArgumentException('Invalid input. Please provide positive numeric values where the start is less than or equal to the end.');
        }
    }
}

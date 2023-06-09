<?php

namespace App\Validation;

use InvalidArgumentException;

class InputValidator
{
    public function validateInput(int $start, int $end)
    {
        if (!is_numeric($start) || !is_numeric($end) || $start < 1 || $end < 1 || $start > $end) {
            throw new InvalidArgumentException('Invalid input. Please provide positive numeric values where the start is less than or equal to the end.');
        }
    }
}
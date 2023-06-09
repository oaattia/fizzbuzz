<?php

namespace Tests;

use App\Service\Printer;
use App\Service\FizzBuzzService;
use App\Validation\InputValidator;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class PrinterTest extends TestCase
{
    private Printer $printer;
    private FizzBuzzService $fizzBuzzService;
    private InputValidator $inputValidator;

    protected function setUp(): void
    {
        $this->fizzBuzzService = new FizzBuzzService();
        $this->inputValidator = new InputValidator();
        $this->printer = new Printer($this->fizzBuzzService, $this->inputValidator);
    }

    public function testPrintFizzBuzzWithInvalidInput(): void
    {
        $invalidInputs = [
            [-20, -10],
            [20, 10],
            [100, 1],
        ];

        foreach ($invalidInputs as $input) {
            $this->expectException(InvalidArgumentException::class);
            $this->printer->printFizzBuzz($input[0], $input[1]);
        }
    }
}

<?php

namespace Tests;

use App\Service\FizzBuzzService as AppFizzBuzzService;
use PHPUnit\Framework\TestCase;

class FizzBuzzServiceTest extends TestCase
{
    private AppFizzBuzzService $fizzBuzzService;

    protected function setUp(): void
    {
        $this->fizzBuzzService = new AppFizzBuzzService();
    }

    public function testGenerateFizzBuzzSequence(): void
    {
        $expected = [1, 2, 'Fizz', 4, 'Buzz', 'Fizz', 7, 8, 'Fizz', 'Buzz', 11, 'Fizz', 13, 14, 'FizzBuzz'];
        $result = $this->fizzBuzzService->generate(1, 15);
        $this->assertEquals($expected, $result);
    }

    public function testGenerateFizzBuzzSequenceWithSameStartAndEnd(): void
    {
        $expected = [7];
        $result = $this->fizzBuzzService->generate(7, 7);
        $this->assertEquals($expected, $result);
    }

}

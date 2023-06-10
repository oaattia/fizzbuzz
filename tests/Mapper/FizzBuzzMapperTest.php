<?php

declare(strict_types=1);

namespace Tests\Mapper;

use App\Mapper\FizzBuzzMapper;

use PHPUnit\Framework\TestCase;

class FizzBuzzMapperTest extends TestCase
{
    public function testTransform(): void
    {
        $mapper = new FizzBuzzMapper();

        $this->assertEquals('FizzBuzz', $mapper->transform(15));

        $this->assertEquals('Fizz', $mapper->transform(9));

        $this->assertEquals('Buzz', $mapper->transform(10));

        $this->assertEquals('7', $mapper->transform(7));
    }
}

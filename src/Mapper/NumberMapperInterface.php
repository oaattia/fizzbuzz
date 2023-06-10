<?php

declare(strict_types=1);

namespace App\Mapper;

interface NumberMapperInterface
{
    public function transform(int $number): string;
}

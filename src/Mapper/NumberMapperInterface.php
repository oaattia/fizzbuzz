<?php

namespace App\Mapper;

interface NumberMapperInterface
{
    public function transform(int $number): string;
}

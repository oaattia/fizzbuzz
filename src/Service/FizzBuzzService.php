<?php

namespace App\Service;

use App\Mapper\NumberMapperInterface;

class FizzBuzzService
{
    public function __construct(private NumberMapperInterface $numberTransformer)
    {
    }
    /**
     * @return array<int,string>
     */
    public function generate(int $start, int $end): array
    {
        $output = [];

        for ($i = $start; $i <= $end; $i++) {
            $output[] = $this->numberTransformer->transform($i);
        }

        return $output;
    }
}

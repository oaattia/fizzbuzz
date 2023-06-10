<?php

declare(strict_types=1);

namespace App\Service;

use App\Mapper\NumberMapperInterface;

class FizzBuzzService
{
    public function __construct(private NumberMapperInterface $numberMapper)
    {
    }
    /**
     * @return array<int,string>
     */
    public function generate(int $start, int $end): array
    {
        $output = [];

        for ($i = $start; $i <= $end; $i++) {
            $output[] = $this->numberMapper->transform($i);
        }

        return $output;
    }
}

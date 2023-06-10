<?php

use App\Validation\InputValidator;
use App\Service\FizzBuzzService;
use App\Mapper\FizzBuzzMapper;
use App\Service\Printer;

require __DIR__.'/vendor/autoload.php';

$service = new Printer(new FizzBuzzService(new FizzBuzzMapper()), new InputValidator());

try {
    $start = readline('Enter the starting number: ');
    $end = readline('Enter the ending number: ');

    $service->printFizzBuzz($start, $end);
} catch (InvalidArgumentException $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}

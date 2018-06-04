<?php

require_once 'vendor/autoload.php';

use App\Library\Calculator;

$calculator = new Calculator();

if (!isset($argv[1])) {
    echo 'Please provide operator, "sum" or "multiply"' . PHP_EOL;
}

$data = $argv[2] ?? '';

try {
    $operator = strtolower($argv[1]);
    switch ($operator) {
        case 'sum':
            $output = $calculator->add($data);
            break;
        case 'multiply':
            $output = $calculator->multiply($data);
            break;
        default:
            $output = 'Please provide valid operator, "sum" or "multiply"';
            break;
    }
    echo $output . PHP_EOL;
} catch (\InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}
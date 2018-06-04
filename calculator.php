<?php

require_once 'vendor/autoload.php';

use App\Library\Calculator;

$calculator = new Calculator();

if (!isset($argv[1])) {
    echo 'Please provide operator, "sum"' . PHP_EOL;
}

$data = $argv[2] ?? '';

try {
    if (strtolower($argv[1]) === 'sum') {
        $output = $calculator->add($data);
    } else {
        $output = 'Please provide valid operator, "sum"';
    }
    echo $output . PHP_EOL;
} catch (\InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}
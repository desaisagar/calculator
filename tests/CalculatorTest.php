<?php

use PHPUnit\Framework\TestCase;
use App\Library\Calculator;

/**
 * Calculator test cases
 */
class CalculatorTest extends TestCase
{
    /**
     * Calculator
     */
    protected $calculator;

    /**
     * Basic setup for test cases
     */
    public function setUp()
    {
        $this->calculator = new Calculator();
    }

    /**
     * Test sum zero to two numbers
     * 
     * @dataProvider dataForSumFromZeroToTwoNumbers
     */
    public function testSumtZeroToTwoNumbers($data, $sum)
    {
        $this->assertEquals($sum, $this->calculator->add($data));
    }

    /**
     * Data provider for sum from 0 to 2 numers
     */
    public function dataForSumFromZeroToTwoNumbers()
    {
        return array(
            ['', 0],
            ['1', 1],
            ['2,3', 5]
        );
    }
}

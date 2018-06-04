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
     * Test sum with o to multple numbers
     *
     * @dataProvider dataForSumWithMultipleNumbers
     */
    public function testSumtZeroToMultipleNumbers($data, $sum)
    {
        $this->assertEquals($sum, $this->calculator->add($data));
    }

    /**
     * Data provider for sum from 0 to 2 numbers
     */
    public function dataForSumFromZeroToTwoNumbers()
    {
        return [
            ['', 0],
            ['1', 1],
            ['2,3', 5]
        ];
    }

    /**
     * Data provider for sum with multiple numbers
     */
    public function dataForSumWithMultipleNumbers()
    {
        return [
            ['', 0],
            ['1', 1],
            ['2,3', 5],
            ['4,5,6', 15],
            ['2,3,4,5', 14],
            ['4,7,3,4,7,3,5,6,7,4,3,2,5,7,5,3,4,6,7,8,9,5,5,5,4,3,2', 133]
        ];
    }
}
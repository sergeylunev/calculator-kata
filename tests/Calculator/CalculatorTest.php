<?php

use PHPUnit\Framework\TestCase;
use Calculator\Calculator;

class CalculatorTest extends TestCase
{
    /**
     * @dataProvider basicCalculations
     */
    public function testBasicCalculation($input, $expected)
    {
        $calculator = new Calculator();
        $result = $calculator->calculate($input);

        $this->assertEquals($expected, $result);
    }

    public function basicCalculations()
    {
        return [
            ["2 + 2", 4],
            ["3 + 3", 6],
            ["100 + 100", 200],
            ["100001 + 2", 100003]
        ];
    }
}

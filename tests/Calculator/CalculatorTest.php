<?php

use Calculator\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * @var Calculator
     */
    private $calculator;

    public function setUp()
    {
        $this->calculator = new Calculator();
    }

    public function testCalculation()
    {
        $stringToCalculate = "2 + 2";
        $result = $this->calculator->calculate($stringToCalculate);

        $this->assertEquals(4, $result);
    }

    public function testAnotherCalculation()
    {
        $stringToCalculate = "3 + 3";
        $result = $this->calculator->calculate($stringToCalculate);

        $this->assertEquals(6, $result);
    }
}

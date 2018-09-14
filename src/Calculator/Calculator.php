<?php

namespace Calculator;

class Calculator
{
    public function calculate(string $expression): int
    {
        $integers = $this->parseString($expression);

        $result = 0;

        foreach ($integers as $value) {
            $result += $value;
        }

        return $result;
    }

    protected function parseString(string $expression): array
    {
        $splitedString = explode(" ", $expression);

        $result = [];
        foreach ($splitedString as $item) {
            if (is_numeric($item)) {
                $result[] = $item;
            }
        }

        return $result;
    }
}
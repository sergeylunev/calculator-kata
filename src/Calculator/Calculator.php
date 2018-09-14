<?php

namespace Calculator;

class Calculator
{

    public function calculate(string $inputData): int
    {
        $result = 0;

        $rawNumbers = $this->parseInputData($inputData);
        foreach ($rawNumbers as $value) {
            $result += $value;
        }

        return $result;
    }

    protected function parseInputData(string $inputData): array
    {
        $result = [];

        $splitData = explode(' ', $inputData);

        foreach ($splitData as $value) {
            if (is_numeric($value)) {
                $result[] = $value;
            }
        }

        return $result;
    }
}
<?php

namespace App\Library;

/**
 * Calculator class
 */
class Calculator
{
    /**
     * Addition of given string with numbers
     * 
     * @param string $data The data
     * @return int The integer value
     */
    public function add($data)
    {
        $numbers = $this->buildArray($data);
        if (is_array($numbers)) {
            return array_sum($numbers);
        }
        return $numbers;
    }

    /**
     * Build array of given string
     * 
     * @param string $data The data
     * @return array The array contains numbers
     */
    private function buildArray($data)
    {
        if (empty($data)) {
            return 0;
        }

        $delimiters = ["\\n", "\n", "n", "\\", "\\;", ";"];
        $data = str_replace($delimiters, ",", $data);

        $numbers = explode(',', $data);

        return $numbers;
    }
}

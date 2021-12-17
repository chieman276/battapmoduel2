<?php

const ADDITION = '+';
const SUBTRACTION = '-';
const MULTIPLICATION = '*';
const DIVISION = '/';

class Calculator
{
    public function calculate($firstOperand, $secondOperand, $operator)
    {
        switch ($operator) {
            case '+':
                return $firstOperand + $secondOperand;
            case '-':
                return $firstOperand - $secondOperand;
            case '*':
                return $firstOperand * $secondOperand;
            case '/':
                if ($secondOperand != 0) {
                    return $firstOperand / $secondOperand;
                } else {
                    return "Can not divide by ";
                }
            default:
                return "Unsupported operation";
        }
    }
}
$calculator = new Calculator();
echo $calculator->calculate(1,2, '-');
echo "<br>";
echo $calculator->calculate(1,2, '+');
echo "<br>";
echo $calculator->calculate(1,2, '*');
echo "<br>";
echo $calculator->calculate(1,0, '/');
?>




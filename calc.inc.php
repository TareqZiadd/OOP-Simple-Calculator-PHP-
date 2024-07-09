<?php

class Calc {
    public int $num1;
    public int $num2;
    public $operator;

    function __construct(int $num1, int $num2, $operator) {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operator = $operator;
    }
    function calcMethod() {
        
        $number1 = $this->num1;
        $number2 = $this->num2;
        $operator = $this->operator;
        $result = null;

        switch ($operator) {
            case '*':
                $result = $number1 * $number2;
                break;
            case '+':
                $result = $number1 + $number2;
                break;
            case '-':
                $result = $number1 - $number2;
                break;
            case '/':
                $result = $number1 / $number2;
                break;
            default:
                $result =include 'errorPage.html';
                
        }

        return $result;

    
}
}




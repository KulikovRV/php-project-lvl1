<?php

namespace Brain\Games\Calc;

use function cli\line;

function printRulesCalc()
{
    return line('What is the result of the expression?');
}

function addQuestionCalc()
{
    $operators = ['+', '-', '*'];
    $randIndex = array_rand($operators);
    $randOperator = $operators[$randIndex];
    $firstRandNumber = rand(1, 99);
    $secondRandNumber = rand(1, 99);
    return "{$firstRandNumber} {$randOperator} {$secondRandNumber}";
}

function calculateCorrectAnswerCalc($question)
{
    $array = explode(" ", $question);
    $operator = $array[1];
    $firstNumber = $array[0];
    $secondNumber = $array[2];

    if ($operator === '+') {
        return $firstNumber + $secondNumber;
    } elseif ($operator === '-') {
        return $firstNumber - $secondNumber;
    } elseif ($operator === '*') {
        return $firstNumber * $secondNumber;
    }
}

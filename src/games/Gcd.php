<?php

namespace Brain\Games\Gcd;

use function cli\line;

function printRulesGcd()
{
    return line('Find the greatest common divisor of given numbers.');
}

function addQuestionGcd()
{
    $firstRandNumber = rand(1, 99);
    $secondRandNumber = rand(1, 99);
    return "{$firstRandNumber} {$secondRandNumber}";
}

function calculateCorrectAnswerGcd($question)
{
    $array = explode(" ", $question);
    $firstNumber = $array[0];
    $secondNumber = $array[1];
    return gmp_gcd($firstNumber, $secondNumber);
}

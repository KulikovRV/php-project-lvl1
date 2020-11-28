<?php

namespace Brain\Games\games\Calc;

use function Brain\Games\Engine\runGame;
use function cli\line;

function runCalcGame()
{
    $rule = 'What is the result of the expression?';
    $answersAndQuestions = getQuestionsAndAnswersCalc();
    return runGame($rule, $answersAndQuestions);
}

function getQuestionsAndAnswersCalc()
{
    $questionsAndAnswers = [];
    $countOfQA = 3;
    $operators = ['+', '-', '*'];

    for ($i = 0; $i < $countOfQA; $i++) {
        $randIndex = array_rand($operators);
        $randOperator = $operators[$randIndex];
        $firstRandNumber = rand(1, 99);
        $secondRandNumber = rand(1, 99);
        $questionsAndAnswers[$i] = [
            'question' => "{$firstRandNumber} {$randOperator} {$secondRandNumber}",
            'correctAnswer' => (string)calculate($firstRandNumber, $randOperator, $secondRandNumber)
        ];
    }

    return $questionsAndAnswers;
}

function calculate($firstNumber, $operator, $secondNumber)
{
    switch ($operator) {
        case '+':
            return $firstNumber + $secondNumber;
        case '-':
            return $firstNumber - $secondNumber;
        case '*':
            return $firstNumber * $secondNumber;
        default:
            throw new Exception("Unknown operator $operator");
    }
}

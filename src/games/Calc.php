<?php

namespace Brain\Games\Games\Calc;

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
            'question'=> "{$firstRandNumber} {$randOperator} {$secondRandNumber}",
            'correctAnswer' => getAnswerCalc($firstRandNumber, $randOperator, $secondRandNumber)
        ];
    }

    return $questionsAndAnswers;
}

function getAnswerCalc($firstRandNumber, $randOperator, $secondRandNumber)
{
    switch ($randOperator) {
        case '+':
            return $firstRandNumber + $secondRandNumber;
        case '-':
            return $firstRandNumber - $secondRandNumber;
        case '*':
            return $firstRandNumber * $secondRandNumber;
        default:
            line('Unknown operator: %s', $randOperator);
    }
}

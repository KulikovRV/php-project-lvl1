<?php

namespace Brain\Games\Calc;

use function Brain\Games\Engine\runGame;
use function cli\line;

function runCalcGame()
{
    $rule = 'What is the result of the expression?';
    $answerAndQuestion = getQuestionAndAnswerCalc();
    return runGame($rule, $answerAndQuestion);
}

function getQuestionAndAnswerCalc()
{
    $questions = [];
    $answers = [];
    $countOfQuestionsAndAnswers = 3;
    $operators = ['+', '-', '*'];

    for ($i = 0; $i < $countOfQuestionsAndAnswers; $i++) {
        $randIndex = array_rand($operators);
        $randOperator = $operators[$randIndex];
        $firstRandNumber = rand(1, 99);
        $secondRandNumber = rand(1, 99);

        $questions[] = "{$firstRandNumber} {$randOperator} {$secondRandNumber}";
        $answers[] = getAnswerCalc($firstRandNumber, $randOperator, $secondRandNumber);
    }

    return [$questions, $answers];
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
            line('Неизвестный оператор: %s', $randOperator);
    }
}

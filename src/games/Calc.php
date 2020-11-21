<?php

namespace Brain\Games\Calc;

use function Brain\Games\Engine\runGame;

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
    if ($randOperator === '+') {
        return $firstRandNumber + $secondRandNumber;
    } elseif ($randOperator === '-') {
        return  $firstRandNumber - $secondRandNumber;
    } elseif ($randOperator === '*') {
        return  $firstRandNumber * $secondRandNumber;
    }
}

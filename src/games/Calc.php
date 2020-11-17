<?php

namespace Brain\Games\Calc;

use function Brain\Games\Engine\runGame;

function runCalcGame()
{
    $rule = getRulesCalc();
    $answerAndQuestion = getQuestionAndAnswerCalc();
    return runGame($rule, $answerAndQuestion);
}

function getRulesCalc()
{
    return 'What is the result of the expression?';
}

function getQuestionAndAnswerCalc()
{
    $questions = [];
    $answers = [];
    $countOfQuestionsAndAnswers = 3;
    $operators = ['+', '-', '*'];

    while ($countOfQuestionsAndAnswers > 0) {
        $randIndex = array_rand($operators);
        $randOperator = $operators[$randIndex];
        $firstRandNumber = rand(1, 99);
        $secondRandNumber = rand(1, 99);

        $questions[] = "{$firstRandNumber} {$randOperator} {$secondRandNumber}";
        $answers[] = getAnswers($firstRandNumber, $randOperator, $secondRandNumber);

        $countOfQuestionsAndAnswers--;
    }

    return [$questions, $answers];
}

function getAnswers($firstRandNumber, $randOperator, $secondRandNumber)
{
    if ($randOperator === '+') {
        return $firstRandNumber + $secondRandNumber;
    } elseif ($randOperator === '-') {
        return  $firstRandNumber - $secondRandNumber;
    } elseif ($randOperator === '*') {
        return  $firstRandNumber * $secondRandNumber;
    }
}

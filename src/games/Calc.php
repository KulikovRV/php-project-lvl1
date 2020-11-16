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

        if ($randOperator === '+') {
            $answers[] = $firstRandNumber + $secondRandNumber;
        } elseif ($randOperator === '-') {
            $answers[] = $firstRandNumber - $secondRandNumber;
        } elseif ($randOperator === '*') {
            $answers[] = $firstRandNumber * $secondRandNumber;
        }
        $countOfQuestionsAndAnswers--;
    }

    return [$questions, $answers];
}

<?php

namespace Brain\Games\Gcd;

use function Brain\Games\Engine\runGame;

function runGcdGame()
{
    $rule = getRulesGcd();
    $answerAndQuestion = getQuestionAndAnswerGcd();
    return runGame($rule, $answerAndQuestion);
}

function getRulesGcd()
{
      return 'Find the greatest common divisor of given numbers.';
}

function getQuestionAndAnswerGcd()
{
    $questions = [];
    $answers = [];
    $countOfQuestionsAndAnswers = 3;

    while ($countOfQuestionsAndAnswers > 0) {
        $firstRandNumber = rand(1, 99);
        $secondRandNumber = rand(1, 99);
        $questions[] =  "{$firstRandNumber} {$secondRandNumber}";
        $answers[] = gmp_gcd($firstRandNumber, $secondRandNumber);
        $countOfQuestionsAndAnswers--;
    }
    return [$questions, $answers];
}

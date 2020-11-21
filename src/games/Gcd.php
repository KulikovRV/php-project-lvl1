<?php

namespace Brain\Games\Gcd;

use function Brain\Games\Engine\runGame;

function runGcdGame()
{
    $rule = 'Find the greatest common divisor of given numbers.';
    $answerAndQuestion = getQuestionAndAnswerGcd();
    return runGame($rule, $answerAndQuestion);
}

function getQuestionAndAnswerGcd()
{
    $questions = [];
    $answers = [];
    $countOfQuestionsAndAnswers = 3;

    for ($i = 0; $i < $countOfQuestionsAndAnswers; $i++) {
        $firstRandNumber = rand(1, 99);
        $secondRandNumber = rand(1, 99);
        $questions[] =  "{$firstRandNumber} {$secondRandNumber}";
        $answers[] = gmp_gcd($firstRandNumber, $secondRandNumber);
    }

    return [$questions, $answers];
}

<?php

namespace Brain\Games\Games\Gcd;

use function Brain\Games\Engine\runGame;

function runGcdGame()
{
    $rule = 'Find the greatest common divisor of given numbers.';
    $answersAndQuestions = getQuestionsAndAnswersGcd();
    return runGame($rule, $answersAndQuestions);
}

function getQuestionsAndAnswersGcd()
{
    $questionsAndAnswers = [];
    $countOfQuestionsAndAnswers = 3;

    for ($i = 0; $i < $countOfQuestionsAndAnswers; $i++) {
        $firstRandNumber = rand(1, 99);
        $secondRandNumber = rand(1, 99);
        $questionsAndAnswers[$i]['question'] =  "{$firstRandNumber} {$secondRandNumber}";
        $questionsAndAnswers[$i]['correctAnswer'] = gmp_gcd($firstRandNumber, $secondRandNumber);
    }

    return $questionsAndAnswers;
}

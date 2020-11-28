<?php

namespace Brain\Games\games\Gcd;

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
    $countOfQA = 3;

    for ($i = 0; $i < $countOfQA; $i++) {
        $firstRandNumber = rand(1, 99);
        $secondRandNumber = rand(1, 99);
        $questionsAndAnswers[$i] = [
            'question' => "{$firstRandNumber} {$secondRandNumber}",
            'correctAnswer' => gmp_gcd($firstRandNumber, $secondRandNumber)
        ];
    }

    return $questionsAndAnswers;
}

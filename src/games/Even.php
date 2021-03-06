<?php

namespace Brain\Games\games\Even;

use function Brain\Games\Engine\runGame;

function runEvenGame()
{
    $rule = 'Answer "yes" if the number is even, otherwise answer "no".';
    $answersAndQuestions = getQuestionsAndAnswersEven();
    runGame($rule, $answersAndQuestions);
}

function getQuestionsAndAnswersEven()
{
    $questionsAndAnswers = [];
    $countOfQA = 3;

    for ($i = 0; $i < $countOfQA; $i++) {
        $randNumber = rand(1, 99);
        $questionsAndAnswers[$i] = [
            'question' => $randNumber,
            'correctAnswer' => isEven($randNumber) ? 'yes' : 'no'
        ];
    }

    return $questionsAndAnswers;
}

function isEven($number)
{
    return $number % 2 === 0;
}

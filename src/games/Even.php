<?php

namespace Brain\Games\games\Even;

use function Brain\Games\Engine\runGame;

function runEvenGame()
{
    $rule = 'Answer "yes" if the number is even, otherwise answer "no".';
    $answerAndQuestion = getQuestionAndAnswerEven();
    return runGame($rule, $answerAndQuestion);
}

function getQuestionAndAnswerEven()
{
    $questions = [];
    $answers = [];
    $countOfQuestionsAndAnswers = 3;

    for ($i = 0; $i < $countOfQuestionsAndAnswers; $i++) {
        $randNumber = rand(1, 99);
        $questions[] = $randNumber;
        $answers[] = isEven($randNumber) ? 'yes' : 'no';
    }
    return [$questions, $answers];
}

function isEven($number)
{
    return $number % 2 === 0;
}

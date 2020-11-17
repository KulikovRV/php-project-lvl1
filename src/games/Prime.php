<?php

namespace Brain\Games\Prime;

use function Brain\Games\Engine\runGame;

function runPrimeGame()
{
    $rule = getRulesPrime();
    $answerAndQuestion = getQuestionAndAnswerPrime();
    return runGame($rule, $answerAndQuestion);
}

function getRulesPrime()
{
     return'Answer "yes" if given number is prime. Otherwise answer "no".';
}

function getQuestionAndAnswerPrime()
{
    $questions = [];
    $answers = [];
    $countOfQuestionsAndAnswers = 3;

    while ($countOfQuestionsAndAnswers > 0) {
        $randNumber = rand(1, 99);
        $questions[] = $randNumber;
        $answers[] = getAnswerPrime($randNumber);
        $countOfQuestionsAndAnswers--;
    }

    return [$questions, $answers];
}

function getAnswerPrime($question)
{
    if ($question < 2) {
        return 'no';
    }

    for ($i = 2; $i <= $question / 2; $i++) {
        if ($question % $i == 0) {
            return 'no';
        }
    }
    return 'yes';
}

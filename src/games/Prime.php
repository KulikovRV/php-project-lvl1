<?php

namespace Brain\Games\games\Prime;

use function Brain\Games\Engine\runGame;

function runPrimeGame()
{
    $rule = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $answerAndQuestion = getQuestionAndAnswerPrime();
    return runGame($rule, $answerAndQuestion);
}

function getQuestionAndAnswerPrime()
{
    $questions = [];
    $answers = [];
    $countOfQuestionsAndAnswers = 3;

    for ($i = 0; $i < $countOfQuestionsAndAnswers; $i++) {
        $randNumber = rand(1, 99);
        $questions[] = $randNumber;
        $answers[] = getAnswerPrime($randNumber);
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

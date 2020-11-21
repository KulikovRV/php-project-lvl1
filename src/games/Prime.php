<?php

namespace Brain\Games\games\Prime;

use function Brain\Games\Engine\runGame;

function runPrimeGame()
{
    $rule = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $answersAndQuestions = getQuestionsAndAnswersPrime();
    return runGame($rule, $answersAndQuestions);
}

function getQuestionsAndAnswersPrime()
{
    $questionsAndAnswers = [];
    $countOfQuestionsAndAnswers = 3;

    for ($i = 0; $i < $countOfQuestionsAndAnswers; $i++) {
        $randNumber = rand(1, 99);
        $questionsAndAnswers[$i]['question'] = $randNumber;
        $questionsAndAnswers[$i]['correctAnswer'] = getAnswerPrime($randNumber);
    }

    return $questionsAndAnswers;
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
